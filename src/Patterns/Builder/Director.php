<?php

namespace Src\Patterns\Builder;

use Src\Patterns\Builder\Builders\Builder;

class Director
{
    public function __construct (private Builder $builder)
    {
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function buildComputer()
    {
        return $this->builder->getComputer();
    }
}
