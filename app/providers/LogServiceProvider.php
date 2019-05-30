<?php
namespace App\Providers;

use Libs\Log\Log;
class LogServiceProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('log',Log::class);
	}
    
}
