<?php

namespace Src\Patterns\Decorator\Toppings;

use Src\Patterns\Decorator\Abstracts\Pizza;
use Src\Patterns\Decorator\Abstracts\ToppingDecorator;

class Cheese extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ', Cheese';
    }

    public function cost(): float
    {
        return $this->pizza->cost() + 4;
    }
}
