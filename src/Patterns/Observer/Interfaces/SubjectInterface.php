<?php

namespace Src\Patterns\Observer\Interfaces;

use Src\Patterns\Observer\Interfaces\ObserverInterface;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface|string $observer);
    public function notifyObservers();
}
