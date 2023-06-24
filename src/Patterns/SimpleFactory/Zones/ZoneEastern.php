<?php

namespace Src\Patterns\SimpleFactory\Zones;

class ZoneEastern extends Zone
{
    public function __construct ()
    {
        $this->offset = -5;
        $this->displayName = 'US/Eastern';
    }  
}
