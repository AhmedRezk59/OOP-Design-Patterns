<?php

namespace Src\Patterns\SimpleFactory\Calenders;

use Src\Patterns\SimpleFactory\Zones\ZoneFactory;

class EasternCalender extends Calender
{
    public function createZone()
    {
        $this->zone = (new ZoneFactory())->createZone('US/Eastern');
    }
}
