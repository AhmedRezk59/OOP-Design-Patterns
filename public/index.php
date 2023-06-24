<?php

use Src\Patterns\SimpleFactory\Calenders\CenteralCalender;
use Src\Patterns\SimpleFactory\Calenders\EasternCalender;
use Src\Patterns\SimpleFactory\Calenders\MountainCalender;
use Src\Patterns\SimpleFactory\Calenders\PacificCalender;

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$calender = new EasternCalender();
$calender->print();
echo "**************************************************<br>";
$calender = new CenteralCalender();
$calender->print();
echo "**************************************************<br>";
$calender = new MountainCalender();
$calender->print();
echo "**************************************************<br>";
$calender = new PacificCalender();
$calender->print();
echo "**************************************************<br>";