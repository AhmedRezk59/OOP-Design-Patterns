<?php

namespace Src\Patterns\Builder\Computers\Components;

class CoolingSystem
{
    public function __construct (private int $lowTempLimit = 20)
    {
    
    }   

    /**
     * Get the value of lowTempLimit
     */ 
    public function getLowTempLimit()
    {
        return $this->lowTempLimit;
    }
}
