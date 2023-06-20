<?php

namespace Src\Patterns\Adapter;

use Src\Patterns\Adapter\Interfaces\DroneInterface;

class SuperDrone implements DroneInterface
{
    public function beep()
    {
        echo 'Beeeeeeeeeeeeeeeeeeeep<br>';
    }

    public function spin_rotors()
    {
        echo "I am spinnig the rotors<br>";
    }

    public function take_off()
    {
        echo 'I am taking off<br>';
    }
}
