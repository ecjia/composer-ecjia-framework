<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

class ApiStatusSucceed extends ApiStatus implements Arrayable
{

    protected $succeed = 1;

    public function toArray()
    {
        return [
            'status' => [
                'succeed' => $this->succeed
            ]
        ];
    }

}