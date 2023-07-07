<?php

namespace Src\Patterns\Builder\Builders;

use Src\Patterns\Builder\Computers\Components\UPS;

interface PowerableBuilder
{
    public function buildUPS() : UPS;
}
