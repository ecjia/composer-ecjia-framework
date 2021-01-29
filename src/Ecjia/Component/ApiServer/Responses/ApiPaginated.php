<?php


namespace Ecjia\Component\ApiServer\Responses;


use Illuminate\Contracts\Support\Arrayable;

class ApiPaginated implements Arrayable
{
    protected $total;

    protected $more;

    /**
     * ApiPaginated constructor.
     * @param $total
     * @param $more
     */
    public function __construct($total, $more)
    {
        $this->total = $total;
        $this->more  = $more;
    }

    public function toArray()
    {
        return [
            'paginated' => [
                'total' => $this->total,
                'count' => $this->total, //待废弃，兼容老的接口
                'more'  => $this->more,
            ]
        ];
    }


}