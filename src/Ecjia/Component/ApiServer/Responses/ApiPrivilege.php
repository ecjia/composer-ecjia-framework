<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

/**
 * API权限值定义
 * Class ApiPrivilege
 * @package Ecjia\Component\ApiServer\Responses
 */
class ApiPrivilege implements Arrayable
{

    protected $privilege;

    /**
     * ApiPrivilege constructor.
     * @param $privilege
     */
    public function __construct($privilege)
    {
        $this->privilege = $privilege;
    }

    public function toArray()
    {
        return [
            'privilege' => $this->privilege,
        ];
    }


}