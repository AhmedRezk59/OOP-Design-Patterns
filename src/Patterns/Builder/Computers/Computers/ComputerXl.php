<?php

namespace Src\Patterns\Builder\Computers\Computers;

use Src\Patterns\Builder\Computers\Components\UPS;

class ComputerXl extends ComputerCS
{
    private UPS $ubs;

    /**
     * Set the value of ubs
     */ 
    public function setUbs($ubs)
    {
        $this->ubs = $ubs;
    }

    /**
     * Get the value of ubs
     */ 
    public function getUbs()
    {
        return $this->ubs;
    }
}
