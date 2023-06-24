<?php

namespace Src\Patterns\SimpleFactory\Zones;

class ZonePacific extends Zone
{
    public function __construct()
    {
        $this->offset = -8;
        $this->displayName = 'US/Pacific';
    }
}
