<?php
namespace App\Providers;

class RouteProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('route',\NoahBuscher\Macaw\Macaw::class);
		$route = $this->app->make('route');
		$this->map();
		$route::dispatch();
	}

	public function map(){
		require_once '../app/http/routes.php';
	}
    
}
