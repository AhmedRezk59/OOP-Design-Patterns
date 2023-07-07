<?php

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Src\Patterns\Builder\Builders\ComputerCSBuilder;
use Src\Patterns\Builder\Builders\ComputerXLBuilder;
use Src\Patterns\Builder\Director;

$dir = new Director(new ComputerXLBuilder());
$computer = $dir->buildComputer();
echo '<pre>';
var_dump($computer->getUbs());
$dir->changeBuilder(new ComputerCSBuilder());
var_dump($dir->buildComputer()->getCoolingSystem());
echo '</pre>';
