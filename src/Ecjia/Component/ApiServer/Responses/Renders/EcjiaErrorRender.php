<?php
namespace Ecjia\Component\ApiServer\Responses\Renders;

use Ecjia\Component\ApiServer\Responses\ApiError;

class EcjiaErrorRender implements \Illuminate\Contracts\Support\Renderable
{
    /**
     * @var ecjia_error
     */
    protected $ecjia_error;

    /**
     * EcjiaErrorRender constructor.
     * @param ecjia_error $ecjia_error
     */
    public function __construct(ecjia_error $ecjia_error)
    {
        $this->ecjia_error = $ecjia_error;
    }


    public function render()
    {
        return (new ApiError($this->ecjia_error))->toJson();
    }

}