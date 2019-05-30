<?php
namespace App\Facade;
class Facade{
    protected static $app;
    public function __construct($app){
        static::$app = $app;
    }
    public static function __callStatic($method,$args){
    	$instance = static::$app->make(static::getFacadeAccessor());
    	$instance->$method(...$args);
    }
    public static function getFacadeAccessor(){

    }

    
}
