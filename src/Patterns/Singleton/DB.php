<?php

namespace Src\Patterns\Singleton;

class DB
{
    private static ?DB $instance = null;
    private function __construct(){}

    public static function getInstance(){
        if(isset(self::$instance)){
            return self::$instance;
        }

        self::$instance = new self();
        return self::$instance;
    }

}