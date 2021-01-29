<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

class ApiStatusError extends ApiStatus implements Arrayable
{
    protected $succeed = 0;

    protected $error_code;

    protected $error_desc;

    /**
     * ApiStatusError constructor.
     * @param $error_code
     * @param $error_desc
     */
    public function __construct($error_code, $error_desc)
    {
        $this->error_code = $error_code;
        $this->error_desc = $error_desc;
    }


    public function toArray()
    {
        return [
            'status' => [
                'succeed'    => $this->succeed,
                'error_code' => $this->error_code,
                'error_desc' => $this->error_desc,
            ]
        ];
    }

}