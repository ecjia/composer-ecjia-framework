<?php


namespace Ecjia\Component\Framework;


use Royalcms\Component\Support\ServiceProvider;

class EcjiaServiceProvider extends ServiceProvider
{

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * Get a list of files that should be compiled for the package.
     *
     * @return array
     */
    public static function compiles()
    {
        $basePath = royalcms()->basePath();

        return [
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/Config/ConfigServiceProvider.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/AdminLogServiceProvider.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/CleanCache/CleanCacheServiceProvider.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/Framework/Ecjia.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/Support/EcjiaLoader.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/App/Facades/AppManager.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/View/Facades/View.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/Notification/Facades/Notification.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/Screen/EcjiaScreen.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/CompatibleTrait.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/AdminLogObject.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/AdminLogAction.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/CompatibleTrait.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/AdminLog.php',
            $basePath . '/vendor/ecjia/framework/Ecjia/Component/AdminLog/Facades/AdminLog.php',
        ];
    }

}