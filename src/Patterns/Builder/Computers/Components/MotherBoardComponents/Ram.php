<?php

namespace Src\Patterns\Builder\Computers\Components\MotherBoardComponents;

class Ram
{
    public function __construct (private int $size)
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
