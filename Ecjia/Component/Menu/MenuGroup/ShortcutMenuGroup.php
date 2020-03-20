<?php


namespace Ecjia\Component\Menu\MenuGroup;

/**
 * 快捷导航菜单
 * Class ShortcutMenuGroup
 * @package Ecjia\Component\Menu\MenuGroup
 */
class ShortcutMenuGroup extends AbstractMenuGroup
{

    protected $group = 'shortcut';

    protected $label = '';

    protected $service_name = 'shortcut_menu';

    public function __construct()
    {
        $this->label = __('快捷导航');
    }

}