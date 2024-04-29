<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [
            ['path' => '/accueil', 'destinationFile' => 'accueil.php'],
            ['path' => '/connexion', 'destinationFile' => 'connexion.php'],
            ['path' => '/contact', 'destinationFile' => 'contact.php'],
            ['path' => '/habitats', 'destinationFile' => 'habitats.php'],
            ['path' => '/service', 'destinationFile' => 'service.php'],
            ['path' => '/', 'destinationFile' => 'Bidule.php'],
        ];
    }

    public function executeRoute($request)
    {
        foreach ($this->routes as $route) {
            if ($this->match($route, $request)) {
                return $route['destinationFile'];
            }
        }

        return '404.php';
    }

    public function match($route, $request)
    {
        if ($request->getPathInfo() != $route['path']) {
            return false;
        }

        /*if($request->getMethod() != $route['method'])
        {
            return false;
        }
        */

        return true;
    }
}
