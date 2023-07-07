<?php

namespace Src\Patterns\Builder\Computers\Components\MotherBoardComponents\SocketTypes;

class USB
{
    public function __construct(private float $version)
    {
    }

    /**
     * Get the value of version
     */ 
    public function getVersion()
    {
        return $this->version;
    }
}
