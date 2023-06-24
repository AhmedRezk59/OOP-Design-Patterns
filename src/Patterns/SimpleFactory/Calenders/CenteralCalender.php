<?php

namespace Src\Patterns\SimpleFactory\Calenders;

use Src\Patterns\SimpleFactory\Zones\ZoneFactory;

class CenteralCalender extends Calender
{
    public function createZone()
    {
        $this->zone = (new ZoneFactory())->createZone('US/Centeral');
    }
}
