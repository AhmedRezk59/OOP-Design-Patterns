<?php

namespace Src\Patterns\Observer\Observers;

use Src\Patterns\Observer\Interfaces\ObserverInterface;

class LoggerObserver implements ObserverInterface
{
    private mixed $value;
    
    public function update(mixed $value)
    {
        $this->value = $value;
        $this->log();
    }

    private function log()
    {
        $str = 'Logging';
        $str .= " temprature = " . $this->value['temprature'];
        $str .= " pressure = " . $this->value['pressure'];
        $str .= " wind Speed = " . $this->value['windSpeed'];
        echo $str . '<br>';
    }
}
