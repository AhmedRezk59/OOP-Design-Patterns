<?php

namespace Src\Patterns\Observer\Interfaces;


interface SubjectInterface
{
    public function addObserver(string $observer);
    public function removeObserver(string $observer);
    public function notifyObservers();
}
