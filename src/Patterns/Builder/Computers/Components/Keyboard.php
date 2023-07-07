<?php

namespace Src\Patterns\Builder\Computers\Components;

class Keyboard
{
    public function __construct(private string $language = 'English')
    {
    }

    /**
     * Get the value of language
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
