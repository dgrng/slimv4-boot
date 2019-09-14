<?php
namespace App\Controllers;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
class HomeController extends Controller{
    public function index(Request $req, Response $res, $args){
        $res->getBody()->write("Hello");
        return "res";
    }
}