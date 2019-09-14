<?php 

use Slim\Factory\AppFactory;
use App\Controllers\HomeController;
use DI\Container;
//session_start();
require __DIR__ . "/../vendor/autoload.php";
//dot env setup
$dotenv = \Dotenv\Dotenv::create(__DIR__."/../");
$dotenv->load();

$container = new Container();

AppFactory::setContainer($container);
$app = AppFactory::create();

//DI container
$container = $app->getContainer();

//injecting controllers
$container->set("HomeController",   function($container){
    return new HomeController($container);
});

//routes
require __DIR__. "/routes.php";

$errorMiddleware = $app->addErrorMiddleware(true, true, true);