<?php

namespace Src\Patterns\Observer\Observers;

use Src\Patterns\Observer\Interfaces\ObserverInterface;
use Src\Patterns\Observer\Observable;

class UserInterfaceObserver implements ObserverInterface
{
    public function __construct(private ?Observable $observable = null)
    {
    }

    public function update()
    {
        if ($this->observable !== null) $this->display();
    }

    private function display()
    {
        $str = 'displaying';
        $str .= " temprature = " . $this->observable->getTemprature();
        $str .= " pressure = " . $this->observable->getPressure();
        $str .= " wind Speed = " . $this->observable->getWindSpeed();
        echo $str . '<br>';
    }
}
