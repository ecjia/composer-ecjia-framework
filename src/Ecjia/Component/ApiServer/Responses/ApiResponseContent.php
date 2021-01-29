<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

class ApiResponseContent implements Arrayable
{
    /**
     * @var Arrayable[]
     */
    protected $content;

    public function __construct(...$args)
    {
        $this->content = $args;
    }

    public function toArray()
    {
        return collect($this->content)->mapWithKeys(function (Arrayable $item) {
           return $item->toArray();
        })->toArray();
    }

}