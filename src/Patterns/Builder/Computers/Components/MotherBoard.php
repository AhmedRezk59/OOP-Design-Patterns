<?php

namespace Src\Patterns\Builder\Computers\Components;

use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\CPU;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\Disk;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\GPU;
use Src\Patterns\Builder\Computers\Components\MotherBoardComponents\Ram;

class MotherBoard
{
    public function __construct(private CPU $cpu, private GPU $gpu, private Ram $ram, private Disk $disk, private array $sockets)
    {
    }
}
