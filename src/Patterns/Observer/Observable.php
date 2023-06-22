<?php

namespace Src\Patterns\Observer;

use Src\Patterns\Observer\Interfaces\ObserverInterface;
use Src\Patterns\Observer\Interfaces\SubjectInterface;

class Observable implements SubjectInterface
{
    private array $observers = [];
    
    public function addObserver(ObserverInterface $observer)
    {
        array_push($this->observers , $observer);
    }

    public function removeObserver(ObserverInterface|string $observer)
    {
        $this->observers = array_filter($this->observers , function (ObserverInterface $o) use($observer) {
            return ! $o instanceof $observer; 
        });
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
    public function getObservers()
    {
        echo '<pre>';
        var_dump($this->observers);
        echo '</pre>';
    }
}
