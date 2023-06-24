<?php

namespace Src\Patterns\SimpleFactory\Calenders;

use Src\Patterns\SimpleFactory\Zones\Zone;

abstract class Calender
{
    protected Zone $zone;

    public function __construct ()
    {
    $this->createZone();
    }
    
    abstract public function createZone();

    public function print()
    {
        echo "The Offset for time zone " . $this->zone->getDisplayName() . ' is ' . $this->zone->getOffset() . '<br>';
    }
    
}
