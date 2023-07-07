<?php

namespace Src\Patterns\Builder\Computers\Components\MotherBoardComponents;

class CPU
{
    public function __construct (private string $type)
    {
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }
}
