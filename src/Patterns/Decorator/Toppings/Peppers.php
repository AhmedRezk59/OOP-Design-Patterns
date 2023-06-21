<?php

namespace Src\Patterns\Decorator\Toppings;

use Src\Patterns\Decorator\Abstracts\Pizza;
use Src\Patterns\Decorator\Abstracts\ToppingDecorator;

class Peppers extends ToppingDecorator
{
    private Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ', Peppers';
    }

    public function cost(): float
    {
        return $this->pizza->cost() + 2;
    }
}
