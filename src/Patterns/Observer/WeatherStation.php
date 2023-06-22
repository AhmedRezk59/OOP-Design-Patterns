<?php

namespace Src\Patterns\Observer;

use Src\Patterns\Observer\Observable;

class WeatherStation extends Observable
{
    private float $pressure = 0;
    private float $windSpeed = 0;
    private float $temprature = 0;
    
    /**
     * Get the value of pressure
     */ 
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set the value of pressure
     *
     * @return  self
     */ 
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
        $this->notifyObservers();
        return $this;
    }

    /**
     * Get the value of windSpeed
     */ 
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * Set the value of windSpeed
     *
     * @return  self
     */ 
    public function setWindSpeed($windSpeed)
    {
        $this->windSpeed = $windSpeed;
        $this->notifyObservers();
        return $this;
    }

    /**
     * Get the value of temprature
     */ 
    public function getTemprature()
    {
        return $this->temprature;
    }

    /**
     * Set the value of temprature
     *
     * @return  self
     */ 
    public function setTemprature($temprature)
    {
        $this->temprature = $temprature;
        $this->notifyObservers();
        return $this;
    }

}
