<?php


namespace Ecjia\Component\Purview;


trait EcjiaPurviewTrait
{

    /**
     * 加载各应用权限
     *
     * @return array
     */
    public static function load_purview($priv_str = '')
    {
        return static::singleton()->loadPurview($priv_str);
    }

    /**
     * 检测动作是否在权限字符串内
     * @param string $priv_str
     * @param string $action_code
     */
    public static function check_purivew($priv_str, $action_code)
    {
        return static::singleton()->checkPurivew($priv_str, $action_code);
    }
    
}