<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf968060a1ca20f19c92dd5ca8ca8b43
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '383eaff206634a77a1be54e64e6459c7' => __DIR__ . '/..' . '/sabre/uri/lib/functions.php',
        '2b9d0f43f9552984cfa82fee95491826' => __DIR__ . '/..' . '/sabre/event/lib/coroutine.php',
        'd81bab31d3feb45bfe2f283ea3c8fdf7' => __DIR__ . '/..' . '/sabre/event/lib/Loop/functions.php',
        'a1cce3d26cc15c00fcd0b3354bd72c88' => __DIR__ . '/..' . '/sabre/event/lib/Promise/functions.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'ebdb698ed4152ae445614b69b5e4bb6a' => __DIR__ . '/..' . '/sabre/http/lib/functions.php',
        'b36b47f18686089d42c9181bf0ef86b9' => __DIR__ . '/../..' . '/common/helper/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Sabre\\Uri\\' => 10,
            'Sabre\\HTTP\\' => 11,
            'Sabre\\Event\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Sabre\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/uri/lib',
        ),
        'Sabre\\HTTP\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/http/lib',
        ),
        'Sabre\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/event/lib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'App\\Contract\\Log' => __DIR__ . '/../..' . '/app/contract/Log.php',
        'App\\Facade\\Facade' => __DIR__ . '/../..' . '/app/facades/Facade.php',
        'App\\Facade\\Log' => __DIR__ . '/../..' . '/app/facades/Log.php',
        'App\\Facade\\Redis' => __DIR__ . '/../..' . '/app/facades/Redis.php',
        'App\\Facade\\Request' => __DIR__ . '/../..' . '/app/facades/Request.php',
        'App\\Facade\\Route' => __DIR__ . '/../..' . '/app/facades/Route.php',
        'App\\Http\\Kernel' => __DIR__ . '/../..' . '/app/http/Kernel.php',
        'App\\Http\\Middleware\\Authenticate' => __DIR__ . '/../..' . '/app/http/middleware/Authenticate.php',
        'App\\Http\\Middleware\\RedirectIfAuthenticated' => __DIR__ . '/../..' . '/app/http/middleware/RedirectIfAuthenticated.php',
        'App\\Models\\Collect' => __DIR__ . '/../..' . '/app/models/Collect.php',
        'App\\Providers\\DB' => __DIR__ . '/../..' . '/app/providers/Providers.php',
        'App\\Providers\\Log' => __DIR__ . '/../..' . '/app/providers/Providers.php',
        'App\\Providers\\LogServiceProvider' => __DIR__ . '/../..' . '/app/providers/LogServiceProvider.php',
        'App\\Providers\\MongoDB' => __DIR__ . '/../..' . '/app/providers/Providers.php',
        'App\\Providers\\Redis' => __DIR__ . '/../..' . '/app/providers/Providers.php',
        'App\\Providers\\RedisServiceProvider' => __DIR__ . '/../..' . '/app/providers/RedisServiceProvider.php',
        'App\\Providers\\RouteProvider' => __DIR__ . '/../..' . '/app/providers/RouteProvider.php',
        'App\\Providers\\ServiceProvider' => __DIR__ . '/../..' . '/app/providers/ServiceProvider.php',
        'App\\Services\\RequestService' => __DIR__ . '/../..' . '/app/service/RequestService.php',
        'App\\Services\\TranslateService' => __DIR__ . '/../..' . '/app/service/TranslateService.php',
        'App\\Services\\YoudaoService' => __DIR__ . '/../..' . '/app/service/YoudaoService.php',
        'BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'CommentController' => __DIR__ . '/../..' . '/app/controllers/CommentController.php',
        'Di' => __DIR__ . '/../..' . '/common/di.php',
        'HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'Illuminate\\Application\\Application' => __DIR__ . '/../..' . '/framework/src/Application.php',
        'Illuminate\\Bootstrap\\ProviderRepository' => __DIR__ . '/../..' . '/framework/src/ProviderRepository.php',
        'Illuminate\\Container\\Container' => __DIR__ . '/../..' . '/framework/src/Container.php',
        'Illuminate\\Http\\Kernel' => __DIR__ . '/../..' . '/framework/src/Kernel.php',
        'Illuminate\\Pipeline\\Pipeline' => __DIR__ . '/../..' . '/framework/src/Pipeline.php',
        'Illuminate\\ProviderRepository\\RegisterFacades' => __DIR__ . '/../..' . '/framework/src/RegisterFacades.php',
        'Illuminate\\ProviderRepository\\RegisterProviders' => __DIR__ . '/../..' . '/framework/src/RegisterProviders.php',
        'Libs\\Log\\MyLog' => __DIR__ . '/../..' . '/libs/Log.php',
        'Libs\\Redis\\MyRedis' => __DIR__ . '/../..' . '/libs/MyRedis.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf968060a1ca20f19c92dd5ca8ca8b43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf968060a1ca20f19c92dd5ca8ca8b43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf968060a1ca20f19c92dd5ca8ca8b43::$classMap;

        }, null, ClassLoader::class);
    }
}
