<?php

namespace Src\Patterns\Decorator\Abstracts;

abstract class Pizza
{
    protected string $description = '';
    
    abstract public function getDescription() : string;
    
    abstract public function cost(): float;
}
