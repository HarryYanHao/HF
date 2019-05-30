<?php
namespace App\Providers;

use Libs\Redis\Redis;
class RedisServiceProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('redis',Redis::class);
	}
    
}
