<?php

namespace Src\Patterns\Builder\Builders;

use Src\Patterns\Builder\Computers\Components\CoolingSystem;

interface CoolableBuilder
{
    public function buildCoolingSystem() :CoolingSystem;
}
