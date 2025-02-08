<?php

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));


$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();

$app->withEloquent();



$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);


$app->configure('app');
$app->register(Illuminate\Database\MigrationServiceProvider::class);


$app->middleware([
    App\Http\Middleware\CorsMiddleware::class,
]);


$app->middleware([
    Fruitcake\Cors\HandleCors::class, // Register it as middleware
]);

$app->routeMiddleware([
    'cors' => \Fruitcake\Cors\HandleCors::class, // Optionally apply CORS to specific routes
]);


$app->configure('cors');


$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

return $app;
