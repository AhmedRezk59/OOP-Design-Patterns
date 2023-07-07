<?php

namespace Src\Patterns\Builder\Builders;

use Src\Patterns\Builder\Computers\Components\CoolingSystem;
use Src\Patterns\Builder\Computers\Components\Keyboard;
use Src\Patterns\Builder\Computers\Components\Monitor;
use Src\Patterns\Builder\Computers\Components\MotherBoard;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\CPU;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\Disk;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\GPU;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\Ram;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\SocketTypes\CType;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\SocketTypes\USB;
use Src\Patterns\Builder\Computers\Components\Mouse;
use Src\Patterns\Builder\Computers\Computers\Computer;
use Src\Patterns\Builder\Computers\Computers\ComputerCS;

class ComputerCSBuilder extends Builder implements CoolableBuilder
{
    protected function buildMotherBoard(): MotherBoard
    {
        $ram = new Ram(16);
        $gpu = new GPU('Nvidia GTX 1060');
        $cpu = new CPU('AMD 3600x');
        $disk = new Disk('SSD' , 480);
        $sockets = [
            new CType(3.1),
            new USB(3.0),
            new USB(2.0),
            new USB(2.0),
        ];
        return new MotherBoard(
            $cpu,
            $gpu,
            $ram,
            $disk,
            $sockets
        );
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard();
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse();
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor(27);
    }

    public function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(18);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerCS();
        $computer->setMotherboard($this->buildMotherBoard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMouse($this->buildMouse());
        $computer->setCoolingSystem($this->buildCoolingSystem());
        return $computer;
    }
}
