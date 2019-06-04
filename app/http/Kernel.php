<?php
namespace App\Http;


use Illuminate\Http\Kernel as HttpKernel;
use \NoahBuscher\Macaw\Macaw;
use Illuminate\Application\Application;

class Kernel extends HttpKernel{
	protected $routeMiddleware=['auth'=>'App\Http\MiddleWare\Authenticate'];
	public function __construct(Application $app,Macaw $route){
		parent::__construct($app,$route);
	}
}