<?php
namespace Illuminate\ProviderRepository;

use  Illuminate\Application\Application;

class RegisterFacades{
	
	public function bootstrap(Application $app)
	{
		Facade::setFacadeApplication($app);
	}

	
}