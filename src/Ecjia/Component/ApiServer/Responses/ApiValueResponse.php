<?php


namespace Ecjia\Component\ApiServer\Responses;


class ApiValueResponse
{

    /**
     * 单个值
     * @var string|bool
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