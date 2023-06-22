<?php

use Src\Patterns\Observer\Observers\AlertSystemObserver;
use Src\Patterns\Observer\Observers\LoggerObserver;
use Src\Patterns\Observer\Observers\UserInterfaceObserver;
use Src\Patterns\Observer\WeatherStation;

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$weatherStation = new WeatherStation();

$weatherStation->addObserver( LoggerObserver::class);
$weatherStation->addObserver( AlertSystemObserver::class);
$weatherStation->addObserver( UserInterfaceObserver::class);
$weatherStation->setTemprature(12);

echo '********************************************************<br>';
$weatherStation->removeObserver(AlertSystemObserver::class);
$weatherStation->setWindSpeed(25);

echo '********************************************************<br>';
$weatherStation->removeObserver(LoggerObserver::class);
$weatherStation->setPressure(54);