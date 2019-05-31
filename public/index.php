<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;
use App\Facade\Log;
use App\Facade\Redis;

header("Content-type:text/html;charset=utf-8");
// Autoload 自动载入
require '../vendor/autoload.php';


$app = require_once __DIR__.'/../bootstrap/app.php';

dump($app::getInstance());



//加载需要的使用的实例
//boot();
$log = $app->make('log');
$log->write('contract','harry test Log contract log');
// Log::write('harry test facade');
$redis = $app->make('redis');
$redis->write('contract','harry test Redis contract log');
Redis::set('facade','harry test redis facade');
// 路由配置
require '../config/routes.php';





