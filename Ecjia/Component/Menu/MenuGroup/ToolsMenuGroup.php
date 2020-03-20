<?php


namespace Ecjia\Component\Menu\MenuGroup;

/**
 * 工具菜单
 * Class ToolsMenuGroup
 * @package Ecjia\Component\Menu\MenuGroup
 */
class ToolsMenuGroup extends AbstractMenuGroup
{

    protected $group = 'tools';

    protected $label = '';

    protected $service_name = 'tool_menu';

    public function __construct()
    {
        $this->label = __('工具');
    }

}