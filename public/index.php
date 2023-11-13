<?php

require __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use Src\Patterns\Singleton\DB;

$db = DB::getInstance();
var_dump($db,$db->getInstance());
