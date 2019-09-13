<?php 

use Slim\Factory\AppFactory;
use App\Controllers\HomeController;
use DI\Container;

require __DIR__ . "/../vendor/autoload.php";
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
