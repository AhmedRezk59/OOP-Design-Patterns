<?php

namespace Src\Patterns\SimpleFactory\Zones;

class ZoneCenteral extends Zone
{
    public function __construct()
    {
        $this->offset = -6;
        $this->displayName = 'US/Centeral';
    }
}
