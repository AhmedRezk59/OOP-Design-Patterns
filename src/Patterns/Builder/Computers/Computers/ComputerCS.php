<?php

namespace Src\Patterns\Builder\Computers\Computers;

use Src\Patterns\Builder\Computers\Components\CoolingSystem;

class ComputerCS extends Computer
{
    private CoolingSystem $coolingSystem;

    public function powerup()
    {
        return true;
    }

    public function powerdown()
    {
        return true;
    }


    /**
     * Set the value of coolingSystem
     */
    public function setCoolingSystem($coolingSystem)
    {
        $this->coolingSystem = $coolingSystem;
    }

    /**
     * Get the value of coolingSystem
     */ 
    public function getCoolingSystem()
    {
        return $this->coolingSystem;
    }
}
