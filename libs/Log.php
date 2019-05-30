<?php
namespace Libs\Log;
class Log{
	public function __construction(){
		$log = new Logger('controller');
        $log->pushHandler(new StreamHandler('../storage/log/' . date('Y-m-d') . '.log', Logger::WARNING));
        return $log;
	}
}





