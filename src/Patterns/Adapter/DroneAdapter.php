<?php

namespace Src\Patterns\Adapter;

use Src\Patterns\Adapter\Interfaces\DroneInterface;
use Src\Patterns\Adapter\Interfaces\DuckInterface;

class DroneAdapter implements DuckInterface
{
    public function __construct(private DroneInterface $drone)
    {
    }

    public function quack()
    {
        $this->drone->beep();
    }

    public function fly()
    {
        $this->drone->spin_rotors();
        $this->drone->take_off();
    }
}
