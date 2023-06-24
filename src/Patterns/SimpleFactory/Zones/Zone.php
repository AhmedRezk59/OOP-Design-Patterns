<?php

namespace Src\Patterns\SimpleFactory\Zones;

class Zone
{
    protected string $displayName;
    protected int $offset;
    
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
