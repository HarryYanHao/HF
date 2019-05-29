<?php
namespace Illuminate\Container;

class Container{
	protected $binding = [];
	protected static $instance;

	public function bind($abstract,$concrete){
		//根据名称创建绑定对象 暂时只支持闭包
		$this->binding[$abstract]['concrete'] = function($container) use ($concrete){
			return $container->build($concrete);
		};
	}

	public function make($abstract){
		//根据key值获取binding值
		$concrete = $this->binding[$abstract]['concrete'];
		return $concrete($this);
	}
	//利用反射创建对象
	public function build($concrete){
		//反射->类
		$reflector = new ReflectionClass($concrete);
		//类->构造方法
		$constructor = $reflector->getConstructor();
		if(is_null){
			//没有构造方法 直接创建对象
			return $reflector->newInstance();
		}
		//构造方法->构造方法的参数
		$dependencies = $constructor->getParameters();
		$instances = $this->getDependencies($dependencies);
		return $reflector->newInstance($instances);
	}

	//获取参数依赖(递归获取)
	protected function getDependencies($parmters){
		$dependencies = [];
		foreach ($parmters as  $parmter) {
			$dependencies[] = $this->make($parmter->getClass()->name);
		}
		return $dependencies;
	}
	public static function setInstance($instance){
		static::$instance = $instance;
	}
	public static function getInstance(){
		return static::$instance;
	}
	
}