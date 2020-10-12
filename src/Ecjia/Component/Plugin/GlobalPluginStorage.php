<?php


namespace Ecjia\Component\Plugin;


use Ecjia\Component\Plugin\Contracts\PluginStorageInterface;
use ecjia_config;

class GlobalPluginStorage implements PluginStorageInterface
{

    private $active_plugins;

    public function __construct()
    {
        $this->active_plugins = ecjia_config::addon()->get('global_plugins', true);
    }

    /**
     * Get all installed plugins
     */
    public function getPlugins()
    {
        return $this->active_pluginsSystemPluginStorage.php;
    }

    /**
     * Check whether the plugin is active by checking the active_plugins list.
     *
     * @since 1.0.0
     *
     * @param string $plugin Base plugin path from plugins directory.
     * @return bool True, if in the active plugins list. False, not in the list.
     */
    public function isActived($plugin)
    {
        $plugin_dir     = dirname($plugin);

        return in_array( $plugin_dir, array_keys($this->active_plugins) );
    }


    public function addPlugin($plugin)
    {
        $plugin_dir     = dirname($plugin);

        $this->active_plugins[$plugin_dir] = $plugin;

        ecjia_config::addon()->write('global_plugins', $this->active_plugins, true);
    }


    public function removePlugin($plugin)
    {
        $plugin_dir     = dirname($plugin);

        unset($this->active_plugins[$plugin]);

        ecjia_config::addon()->write('global_plugins', $this->active_plugins, true);
    }

}