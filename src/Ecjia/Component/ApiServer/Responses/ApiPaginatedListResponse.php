<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

class ApiPaginatedListResponse implements Arrayable
{
    /**
     * @var ApiListResponse
     */
    protected $list;

    /**
     * @var ApiPaginated
     */
    protected $paginated;

    /**
     * ApiPaginatedListResponse constructor.
     * @param ApiListResponse $list
     * @param ApiPaginated $paginated
     */
    public function __construct(ApiListResponse $list, ApiPaginated $paginated)
    {
        $this->list      = $list;
        $this->paginated = $paginated;
    }

    public function toArray()
    {
        return array_merge($this->list->toArray(), $this->paginated->toArray());
    }


}