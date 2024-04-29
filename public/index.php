<?php
require(dirname(__DIR__) . '/Classes/Request.php');
require(dirname(__DIR__) . '/Classes/Router.php');

$request = new Request();

$router = new Router();

$route = $router->executeRoute($request);

require(dirname(__DIR__) . '/pages/' . $route);
