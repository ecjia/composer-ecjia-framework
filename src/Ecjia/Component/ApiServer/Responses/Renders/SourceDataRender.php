<?php
namespace Ecjia\Component\ApiServer\Responses\Renders;

class SourceDataRender
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

        if (isset($data['data'])) {
            $responseData['data'] = $data['data'];
        } else {
            $responseData['data'] = $data;
        }

        if (isset($data['pager'])) {
            $responseData['paginated'] = $data['pager'];
        }

        if (isset($data['privilege'])) {
            $responseData['privilege'] = $data['privilege'];
        }

        return json_encode($responseData);
    }

    protected function makeSucceedStatus()
    {
        return array('data' => array(), 'status' => array('succeed' => 1));
    }

}