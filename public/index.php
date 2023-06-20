<?php

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Src\Patterns\Adapter\DroneAdapter;
use Src\Patterns\Adapter\MallardDuck;
use Src\Patterns\Adapter\SuperDrone;

$duck = new MallardDuck();
$duck->quack();
$duck->fly();

echo '---------------------------------------------------<br>';

$duck = new DroneAdapter(new SuperDrone());
$duck->quack();
$duck->fly();