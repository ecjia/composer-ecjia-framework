<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

class ApiMapResponse implements Arrayable
{
    /**
     * 一维数组，通知用于祥情数据
     * @var array
     */
    protected $data;

    /**
     * ApiMapResponse constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function toArray()
    {
        return [
            'data' => $this->data,
        ];
    }

}