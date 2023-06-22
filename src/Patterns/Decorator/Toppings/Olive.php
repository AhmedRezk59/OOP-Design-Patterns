<?php

namespace Src\Patterns\Decorator\Toppings;

use Src\Patterns\Decorator\Abstracts\Pizza;
use Src\Patterns\Decorator\Abstracts\ToppingDecorator;

class Olive extends ToppingDecorator
{
    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ', Olive';
    }

    public function cost(): float
    {
        return $this->pizza->cost() + 3;
    }
}
