<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 18.12.2018
 * Time: 20:31
 */

class Router
{

    private $routes;

    public function __construct()
    {
        $this->routes = include_once(ROOT . '/config/routes.php');
    }

    private function getUri()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

    }

    public function go()
    {
        $uri = $this->getUri();

        foreach( $this->routes as $sysUri => $classMethod)
        {
            if(preg_match("~^$sysUri~", $uri) == 1)
            {
                echo "Find! $sysUri in $uri and will do $classMethod <br>";

                $arrCM = explode('/', $classMethod);

                $controlClass = array_shift($arrCM);
                $controlMethod = array_shift($arrCM);

                include_once(ROOT . "/controllers/$controlClass.php");

                $controllerObject = new $controlClass();

                $controllerObject->$controlMethod($uri);

            }
        }

    }

}