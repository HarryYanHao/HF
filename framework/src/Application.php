<?php
namespace Illuminate\Application;
use Illuminate\Container\Container;
class Application extends Container{
	const VERSION = '1.0.1';
	protected $basePath;
	public function __construct(){
		$this->registerBaseBindings();
	}
	protected function registerBaseBindings(){
		static::setInstance($this);
		$this->bind('app',$this);
	}
	public function version(){
		return self::VERSION;
	}
	public function configPath(){
		return $this->basePath.DIRECTORY_SEPARATOR.'config';
	}
}