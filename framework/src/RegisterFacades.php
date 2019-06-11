<?php
namespace Illuminate\ProviderRepository;

use App\Facade\Facade;
use  Illuminate\Application\Application;

class RegisterFacades{
	
	public function bootstrap(Application $app)
	{
		Facade::setFacadeApplication($app);
	}

	
}