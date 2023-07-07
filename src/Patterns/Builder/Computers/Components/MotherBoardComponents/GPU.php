<?php

namespace Src\Patterns\Builder\Computers\Components\MotherBoardComponents;

class GPU
{
    public function __construct (private string $version)
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
