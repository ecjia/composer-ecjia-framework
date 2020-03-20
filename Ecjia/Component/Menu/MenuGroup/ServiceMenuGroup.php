<?php


namespace Ecjia\Component\Menu\MenuGroup;

/**
 * 服务菜单
 * Class ServiceMenuGroup
 * @package Ecjia\Component\Menu\MenuGroup
 */
class ServiceMenuGroup extends AbstractMenuGroup
{

    protected $group = 'service';

    protected $label = '';

    protected $service_name = 'service_menu';

    public function __construct()
    {
        $this->label = __('服务');
    }

}