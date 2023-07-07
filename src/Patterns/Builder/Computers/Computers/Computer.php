<?php

namespace Src\Patterns\Builder\Computers\Computers;

use Src\Patterns\Builder\Computers\Components\Keyboard;
use Src\Patterns\Builder\Computers\Components\Monitor;
use Src\Patterns\Builder\Computers\Components\MotherBoard;
use Src\Patterns\Builder\Computers\Components\Mouse;

abstract class Computer
{
    private MotherBoard $motherboard;
    private Keyboard $keyboard;
    private Mouse $mouse;
    private Monitor $monitor;

    abstract public function powerup();
    abstract public function powerdown();

    /**
     * Set the value of motherboard
     */ 
    public function setMotherboard($motherboard)
    {
        $this->motherboard = $motherboard;
    }

    /**
     * Set the value of keyboard
     */ 
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    /**
     * Set the value of mouse
     */ 
    public function setMouse($mouse)
    {
        $this->mouse = $mouse;
    }

    /**
     * Set the value of monitor
     */ 
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;
    }
}
