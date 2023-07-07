<?php

namespace Src\Patterns\Builder\Computers\Components\MotherBoardComponents;

class Disk
{
    public function __construct (private string $type , private int $size)
    {
    
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }
}
