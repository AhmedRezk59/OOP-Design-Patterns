<?php

namespace Src\Patterns\Observer;

use InvalidArgumentException;
use Src\Patterns\Observer\Interfaces\ObserverInterface;
use Src\Patterns\Observer\Interfaces\SubjectInterface;

trait Observable
{
    private array $observers = [];
    
    public function addObserver(string $observer)
    {
        $this->checkObserver($observer);
        array_push($this->observers , $observer);
    }
    
    public function removeObserver(string $observer)
    {
        $this->checkObserver($observer);
        unset($this->observers[array_search($observer , $this->observers)]);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            (new $observer($this))->update();
        }
    }

    private function checkObserver(string $observer)
    {
        if ( ! in_array( ObserverInterface::class , class_implements($observer))) 
            throw new InvalidArgumentException("$observer does not implement Observer Interface");
    }
}
