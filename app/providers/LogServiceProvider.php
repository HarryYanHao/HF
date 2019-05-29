<?php
namespace App\Providers;
class LogServiceProvider extends ServiceProvider{
	public function register(){
		$this->app->bind('log','Log');
	}
    
}
