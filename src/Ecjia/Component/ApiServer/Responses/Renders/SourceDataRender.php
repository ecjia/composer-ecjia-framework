<?php
namespace Ecjia\Component\ApiServer\Responses\Renders;

class SourceDataRender implements \Illuminate\Contracts\Support\Renderable
{
    protected $sourceData = array();

    /**
     * SourceDataRender constructor.
     * @param array $sourceData
     */
    public function __construct(array $sourceData)
    {
        $this->sourceData = $sourceData;
    }


    public function render()
    {
        $responseData = $this->makeSucceedStatus();

        if (isset($this->sourceData['data'])) {
            $responseData['data'] = $this->sourceData['data'];
        } else {
            $responseData['data'] = $this->sourceData;
        }

        if (isset($this->sourceData['pager'])) {
            $responseData['paginated'] = $this->sourceData['pager'];
        }

        if (isset($this->sourceData['privilege'])) {
            $responseData['privilege'] = $this->sourceData['privilege'];
        }

        return json_encode($responseData);
    }

    protected function makeSucceedStatus()
    {
        return array('data' => array(), 'status' => array('succeed' => 1));
    }

}