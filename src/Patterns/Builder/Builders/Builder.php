<?php

namespace Src\Patterns\Builder\Builders;

use Src\Patterns\Builder\Computers\Components\Keyboard;
use Src\Patterns\Builder\Computers\Components\Monitor;
use Src\Patterns\Builder\Computers\Components\MotherBoard;
use Src\Patterns\Builder\Computers\Components\Mouse;
use Src\Patterns\Builder\Computers\Computers\Computer;

abstract class Builder
{
    abstract protected function buildMotherBoard(): MotherBoard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;
    abstract public function getComputer(): Computer;
}
