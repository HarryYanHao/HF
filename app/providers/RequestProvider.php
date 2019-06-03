<?php
namespace App\Providers;

class RequestProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('request',\Sabre\HTTP\Request::class);
	}
    
}
