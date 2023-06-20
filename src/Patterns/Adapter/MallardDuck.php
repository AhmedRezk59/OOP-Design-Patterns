<?php

namespace Src\Patterns\Adapter;

use Src\Patterns\Adapter\Interfaces\DuckInterface;

class MallardDuck implements DuckInterface
{
    public function quack ()
    {
        echo 'I am quacking<br>';
    }

    public function fly()
    {
        echo 'I am flying<br>';
    }
}
