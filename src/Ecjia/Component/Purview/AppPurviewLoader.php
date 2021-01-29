<?php


namespace Ecjia\Component\Purview;


use Ecjia\Component\Purview\Contracts\PurviewLoaderInterface;
use RC_App;
use RC_Api;

class AppPurviewLoader implements PurviewLoaderInterface
{

    /**
     * 所有权限的数组
     *
     * @var array
     */
    protected $purviews = array();

    /**
     * @var EcjiaPurview
     */
    protected $purview;

    /**
     * AppPurviewLoader constructor.
     * @param EcjiaPurview $purview
     */
    public function __construct(EcjiaPurview $purview)
    {
        $this->purview = $purview;

        $this->loadPurview();
    }


    /**
     * 加载各应用权限
     * @return array
     */
    public function loadPurview()
    {
        $apps = $this->purview->getApps();

        foreach ($apps as $app) {
            $group = $this->loadAppPurview($app);
            if ($group) {
                $this->purviews[] = $group;
            }
        }

        return $this->purviews;
    }

    /**
     * 加载应用权限具体操作
     * @param string $app_dir
     */
    protected function loadAppPurview($app_dir)
    {
        try {
            if (!RC_App::hasAlias($app_dir)) {
                return false;
            }

            $res = $this->requestPurviewApi($app_dir);

            if ($res) {
                $appinfo    = RC_App::driver($app_dir);
                $app_name   = $appinfo->getPackage('format_name') ?: $appinfo->getPackage('name');
                $priv_group = array(
                    'group_name'    => $app_name,
                    'group_code'    => $app_dir,
                    'group_purview' => $res
                );
                return $priv_group;
            }
            return false;
        } catch (\InvalidArgumentException $e) {
            ecjia_log_notice($e);
        }
    }

    /**
     * 请求权限API，获取配置数据
     * @param string $app_dir
     */
    protected function requestPurviewApi($app_dir)
    {
        $res = RC_Api::api($app_dir, 'admin_purview');
        return $res;
    }

    /**
     * 获取应用权限数组
     * @return array:
     */
    public function getPurviews()
    {
        return $this->purviews;
    }

}