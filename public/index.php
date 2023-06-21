<?php

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Src\Patterns\Decorator\ThickCurstPizza;
use Src\Patterns\Decorator\ThinCurstPizza;
use Src\Patterns\Decorator\Toppings\Cheese;
use Src\Patterns\Decorator\Toppings\Olive;
use Src\Patterns\Decorator\Toppings\Peppers;

$pizza = new ThickCurstPizza();
$pizza = new Peppers($pizza);
$pizza = new Olive($pizza);
$pizza = new Olive($pizza);
$pizza = new Cheese($pizza);

echo $pizza->getDescription() . '<br>';
echo $pizza->cost() . '$<br>';

echo '------------------------------------------------------------------<br>';

$pizza2 = new ThinCurstPizza();

$pizza2 = new Peppers($pizza2);
$pizza2 = new Olive($pizza2);
$pizza2 = new Cheese($pizza2);
echo $pizza2->getDescription() . '<br>';
echo $pizza2->cost() . '$<br>';
