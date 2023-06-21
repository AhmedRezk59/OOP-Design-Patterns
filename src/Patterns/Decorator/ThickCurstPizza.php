<?php

namespace Src\Patterns\Decorator;

use Src\Patterns\Decorator\Abstracts\Pizza;

class ThickCurstPizza extends Pizza
{
    public function __construct ()
    {
        $this->description = "Thick Normal Pizza";
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }

    public function cost(): float
    {
        return 15;
    }
}
