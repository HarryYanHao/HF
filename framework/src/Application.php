<?php
namespace Illuminate\Application;
use Illuminate\Container\Container;
use App\Providers\LogServiceProvider;
use App\Providers\RedisServiceProvider;
use App\Providers\RequestProvider;
use App\Providers\RouteProvider;
use App\Facade\Facade;
class Application extends Container{
	const VERSION = '1.0.1';
	protected $basePath;
	public function __construct(){
		$this->registerBaseBindings();

		//门面初始化
		$this->registerBaseFacade();
		
		$this->registerBaseServiceProviders();

		
	}
	protected function registerBaseBindings(){
		static::setInstance($this);
		$this->bind('app',$this);
		$this->alias('app','Illuminate\Application\Application');
	}

	protected function registerBaseServiceProviders(){
		$this->register(new LogServiceProvider($this));
		$this->register(new RedisServiceProvider($this));
		$this->register(new RequestProvider($this));
		$this->register(new RouteProvider($this));		
	}
	protected function registerBaseFacade(){
		new Facade($this);
	}
	protected function register($provider){
		$provider->register();
	}
	protected function getProvider($provider){
		is_string($provider)?$provider:get_class($provider);
	}

	public function version(){
		return self::VERSION;
	}
	public function configPath(){
		return $this->basePath.DIRECTORY_SEPARATOR.'config';
	}
	public function __invoke($param){
		return $this->make($param);
	}
}