<?php

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Src\Patterns\Observer\Observers\AlertSystemObserver;
use Src\Patterns\Observer\Observers\LoggerObserver;
use Src\Patterns\Observer\Observers\UserInterfaceObserver;
use Src\Patterns\Observer\WeatherStation;

$weatherStation = new WeatherStation();

$weatherStation->addObserver(new LoggerObserver());
$weatherStation->addObserver(new AlertSystemObserver());
$weatherStation->addObserver(new UserInterfaceObserver());

$weatherStation->setTemprature(12);
echo "-----------------------------------------------------<br>";
$weatherStation->removeObserver(new LoggerObserver());
$weatherStation->setPressure(34);

echo "-----------------------------------------------------<br>";
$weatherStation->removeObserver(new AlertSystemObserver());
$weatherStation->setWindSpeed(50);

echo "-----------------------------------------------------<br>";
$weatherStation2 = new WeatherStation();
$weatherStation2->setTemprature(12);
$weatherStation2->addObserver(new AlertSystemObserver());
$weatherStation2->setWindSpeed(12);