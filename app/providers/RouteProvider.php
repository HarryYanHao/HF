<?php
namespace App\Providers;
use Sabre\HTTP\Request;

class RouteProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('route',\NoahBuscher\Macaw\Macaw::class);
		$this->app->alias('route','NoahBuscher\Macaw\Macaw');
		$route = $this->app->make('route');
		$request_params = Request::getConstructParams($_SERVER);
    	$request = $this->app->make('request',$request_params);
		$this->map();
		$route::dispatch($request);
	}

	public function map(){
		require_once '../app/http/routes.php';
	}
    
}
