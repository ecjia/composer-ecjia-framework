<?php


namespace Ecjia\Component\Purview;

use Ecjia\Component\Purview\Contracts\PurviewLoaderInterface;
use RC_Hook;
use RC_Api;

class SystemPurivewLoader implements PurviewLoaderInterface
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
     * 载入系统权限
     */
    protected function loadPurview()
    {
        $this->purviews[] = $this->requestSystemPurivewApi();
    }

    /**
     * 请求系统权限API，获取配置数据
     *
     * @return array
     */
    private function requestSystemPurivewApi()
    {
        $res = RC_Api::api('system', 'system_purview');

        $priv_group = array(
            'group_name'    => __('系统', 'ecjia'),
            'group_code'    => 'system',
            'group_purview' => $res
        );

        $priv_group = RC_Hook::apply_filters('system_system_purview_filter', $priv_group);

        return $priv_group;
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