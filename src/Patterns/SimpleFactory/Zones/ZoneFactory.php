<?php

namespace Src\Patterns\SimpleFactory\Zones;

use Src\Patterns\SimpleFactory\Zones\ZoneCenteral;
use Src\Patterns\SimpleFactory\Zones\ZoneEastern;
use Src\Patterns\SimpleFactory\Zones\ZoneMountain;
use Src\Patterns\SimpleFactory\Zones\ZonePacific;

class ZoneFactory
{
    public function createZone(string $zone)
    {
        return match($zone) {
            'US/Pacific' => new ZonePacific(),
            'US/Centeral' => new ZoneCenteral(),
            'US/Mountain' => new ZoneMountain(),
            'US/Eastern' => new ZoneEastern()
        };
    }
}
