<?php 
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../vendor/illuminate/support/Illuminate/Support/helpers.php';
include __DIR__.'/../app/Config/database.php';

$basePath = str_finish(dirname(__FILE__), '/');
$controllersDirectory = $basePath . '../app/src/Controllers';
$modelsDirectory = $basePath . '../app/src/Models';
$viewsDirectory = $basePath . '../app/Views';
$cacheDirectory = $basePath . '../app/Cache';

// register the autoloader and add directories
Illuminate\Support\ClassLoader::register();
Illuminate\Support\ClassLoader::addDirectories(array($controllersDirectory, $modelsDirectory));

// Instantiate the container
$app = new Illuminate\Container\Container();

// Tell facade about the application instance
Illuminate\Support\Facades\Facade::setFacadeApplication($app);

// register application instance with container
$app['app'] = $app;

// set environment 
$app['env'] = 'production';

with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

include $basePath . '../Routes.php';

// Instantiate the request
$request = Illuminate\Http\Request::createFromGlobals();

if($app['env'] == 'dev'){
    // Dispatch the router
    $response = $app['router']->dispatch($request);
    // Send the response
    $response->send();
}else{
    try
    {   
        // Dispatch the router
        $response = $app['router']->dispatch($request);

        // Send the response
        $response->send();
    }
    catch(\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $notFound)
    {
        with(new \Illuminate\Http\Response('Oops! this page does not exists', 400))->send();
    }
}