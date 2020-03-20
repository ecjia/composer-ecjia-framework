<?php


namespace Ecjia\Component\Menu\MenuGroup;

/**
 * 设置菜单
 * Class SettingMenuGroup
 * @package Ecjia\Component\Menu\MenuGroup
 */
class SettingMenuGroup extends AbstractMenuGroup
{

    protected $group = 'setting';

    protected $label = '';

    protected $service_name = 'setting_menu';

    public function __construct()
    {
        $this->label = __('设置');
    }

}