<?php

namespace Src\Patterns\Builder\Computers\Components;

class Mouse
{
    public function __construct (private string $type = 'USB')
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
