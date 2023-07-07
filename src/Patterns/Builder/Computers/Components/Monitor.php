<?php

namespace Src\Patterns\Builder\Computers\Components;

class Monitor
{
    public function __construct (private float $size)
    {
    
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }
}
