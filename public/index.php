<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/*
    Laravel uses this to measure how long the request takes (for debugging, profiling, or performance logging).
*/

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    /*
        Instead of starting the full app, it loads a simple maintenance page so users see a friendly message. 
    */
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/
/* You do not need to require the files*/
require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

/*Loads configuration, environment variables (.env), service providers, and sets up the service container.*/
$app = require_once __DIR__.'/../bootstrap/app.php';


/*$kernel now holds the HTTP kernel object which will process the incoming request*/
$kernel = $app->make(Kernel::class);

/*Process the request, run all logic, and send back the response*/
$response = $kernel->handle(
    $request = Request::capture()
)->send();

/*all the cleanup or background tasks after the page has been sent.*/
$kernel->terminate($request, $response);
