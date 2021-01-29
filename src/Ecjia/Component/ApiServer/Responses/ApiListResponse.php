<?php


namespace Ecjia\Component\ApiServer\Responses;


class ApiListResponse
{
    /**
     * 二维数组，通知用于列表数据
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