<?php
namespace Libs\Redis;
use \Redis;
class Redis extends Redis{
	public function __construct(){
		 $redis = '';
         $redisConfig = config('redis');
         $redis = new Redis();
         $redis->connect($redisConfig['host'],$redisConfig['port']);
         return $redis;
	}
	

}





