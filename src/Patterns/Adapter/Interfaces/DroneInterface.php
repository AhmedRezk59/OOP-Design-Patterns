<?php

namespace Src\Patterns\Adapter\Interfaces;

interface DroneInterface
{
    public function beep();
    public function spin_rotors();
    public function take_off();
}
