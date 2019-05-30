<?php
namespace Libs\Log;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class Log extends Logger{
	public function __construct(){
		return parent::__construct('controller',[new StreamHandler('../storage/log/' . date('Y-m-d') . '.log', Logger::WARNING)]);
	}
	public function write($param){
		dump($param);
	}

}





