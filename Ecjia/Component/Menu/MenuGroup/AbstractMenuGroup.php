<?php


namespace Ecjia\Component\Menu\MenuGroup;


use Ecjia\Component\Menu\Menu;
use RC_Api;

class AbstractMenuGroup
{
    protected $group;

    protected $label;

    protected $service_name;

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     * @return AbstractMenuGroup
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     * @return AbstractMenuGroup
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * @param mixed $service_name
     * @return AbstractMenuGroup
     */
    public function setServiceName($service_name)
    {
        $this->service_name = $service_name;
        return $this;
    }

    /**
     * 加载后台菜单
     *
     * @param array $apps
     * @return array
     */
    public function loadAppMenus(array $apps)
    {
        $menus = array();

        foreach ($apps as $app) {
            $menu = RC_Api::api($app, $this->service_name);
            if (is_array($menu)) {
                foreach ($menu as $submenu) {
                    if ($submenu instanceof Menu) {
                        $menus[] = $submenu;
                    }
                }
            }
            elseif ($menu instanceof Menu) {
                $menus[] = $menu;
            }
        }

        usort($menus, array('Ecjia\Component\Menu\MenuSortHandler', 'Handler'));

        return $menus;
    }


}