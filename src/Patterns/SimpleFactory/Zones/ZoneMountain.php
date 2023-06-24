<?php

namespace Src\Patterns\SimpleFactory\Zones;

class ZoneMountain extends Zone
{
    public function __construct()
    {
        $this->offset = -7;
        $this->displayName = 'US/Mountain';
    }
}
