<?php
namespace Illuminate\Http;



use \NoahBuscher\Macaw\Macaw;
use Illuminate\Application\Application;

class Kernel{
	protected $app;

	protected $router;

	protected $bootstrappers = [];

	protected $middleware = [];

	protected $routeMiddleware = [];

	public function __construct(Application $app,Macaw $router){
		$this->app = $app;
		$this->router = $router;
		foreach ($this->routeMiddleware as $key=>$middleware){
			$router::middleware($key,$middleware);
		}
	}

		

	
}