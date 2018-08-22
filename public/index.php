<?php

require_once '../MyApp/src/Core/helloWorld.php';
require_once '../MyApp/src/Core/Router.php';
$myHello = new MyApp\Core\helloWorld();
$rota = $_SERVER['REQUEST_URI'];

MyApp\Core\Router::createRoute("/do", function (){
    $f = new MyApp\Core\helloWorld();
    $f->doSomeThing();
});
MyApp\Core\Router::createRoute("/else", function (){
    $f = new MyApp\Core\helloWorld();
    $f->doSomeThingElse();
});
MyApp\Core\Router::createRoute("/BLa", function (){
    echo 'Yo Soy a Router :)';
});
MyApp\Core\Router::executeRoute($rota);

