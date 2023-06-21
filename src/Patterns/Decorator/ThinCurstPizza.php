<?php

namespace Src\Patterns\Decorator;

use Src\Patterns\Decorator\Abstracts\Pizza;

class ThinCurstPizza extends Pizza
{
    public function __construct()
    {
        $this->description = "Thin Normal Pizza";
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function cost(): float
    {
        return 12;
    }
}
