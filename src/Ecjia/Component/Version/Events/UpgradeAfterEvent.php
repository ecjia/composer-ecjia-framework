<?php

namespace Ecjia\Component\Version\Events;

use Ecjia\Component\Version\Version;

class UpgradeAfterEvent
{

    /**
     * @var Version
     */
    public $version;

    /**
     * @var array
     */
    public $result;

    /**
     * UpgradeAfterEvent constructor.
     * @param Version $version
     * @param array $result
     */
    public function __construct(Version $version, array $result)
    {
        $this->version = $version;
        $this->result  = $result;
    }


}