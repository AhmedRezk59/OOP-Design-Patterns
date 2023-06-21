<?php

namespace Src\Patterns\Observer;

use Src\Patterns\Observer\Interfaces\ObserverInterface;
use Src\Patterns\Observer\Interfaces\SubjectInterface;

class Observable implements SubjectInterface
{
    private array $observers = [];
    
    public function addObserver(ObserverInterface $observer)
    {
        array_push($this->observers , $observer::class);
    }

    public function removeObserver(ObserverInterface $observer)
    {
        if (($key = array_search($observer::class, $this->observers , true)) !== FALSE) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(mixed $value)
    {
        foreach ($this->observers as $observer) {
            (new $observer())->update($value);
        }
    }
}
