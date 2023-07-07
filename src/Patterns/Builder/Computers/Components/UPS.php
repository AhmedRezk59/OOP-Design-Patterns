<?php

namespace Src\Patterns\Builder\Computers\Components;

class UPS
{
    public function __construct(private int $durationMinutes = 30)
    {
    }

    /**
     * Get the value of durationMinutes
     */ 
    public function getDurationMinutes()
    {
        return $this->durationMinutes;
    }
}
