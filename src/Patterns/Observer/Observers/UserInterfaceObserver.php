<?php

namespace Src\Patterns\Observer\Observers;

use Src\Patterns\Observer\Interfaces\ObserverInterface;

class UserInterfaceObserver implements ObserverInterface
{
    private mixed $value;

    public function update(mixed $value)
    {
        $this->value = $value;
        $this->display();
    }

    private function display()
    {
        $str = 'Displaying';
        $str .= " temprature = " . $this->value['temprature'];
        $str .= " pressure = " . $this->value['pressure'];
        $str .= " wind Speed = " . $this->value['windSpeed'];
        echo $str . '<br>';
    }
}
