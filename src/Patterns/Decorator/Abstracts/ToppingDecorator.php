<?php

namespace Src\Patterns\Decorator\Abstracts;

abstract class ToppingDecorator extends Pizza
{
    protected Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }
}
