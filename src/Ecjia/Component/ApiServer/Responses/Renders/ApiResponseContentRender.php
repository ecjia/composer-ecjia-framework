<?php


namespace Ecjia\Component\ApiServer\Responses\Renders;


use Ecjia\Component\ApiServer\Responses\ApiResponseContent;

class ApiResponseContentRender
{
    /**
     * @var ApiResponseContent
     */
    protected $content;

    /**
     * ApiResponseContentRender constructor.
     * @param ApiResponseContent $content
     */
    public function __construct(ApiResponseContent $content)
    {
        $this->content = $content;
    }


    public function render()
    {
        return json_encode($this->content->toArray());
    }

}