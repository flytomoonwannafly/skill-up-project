<?php

namespace Application\Core;

use Application\Controller\ControllerApplication;


class Route
{

    public $routes = [];

    public function __construct()
    {
        $this->routes = require_once ROOT . '/Config/Routes.php';
    }

    public function start()
    {
        $is_uri_matched = false;
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $handler) {
            if (preg_match('~^' . $route . '$~', $uri)) {
                $data = preg_replace('~^' . $route . '$~', $handler, $uri);

                $data = explode('/', $data);
                $controller_name = array_shift($data);
                $action_name = array_shift($data);

                $controller_name = 'Controller' . ucfirst($controller_name);
                $action_name = 'action_' . $action_name;

                // создаем контроллер
                $class = '\Application\Controller\\' . $controller_name;
                $instance = new $class();
                call_user_func_array([$instance, $action_name], $data);
                $is_uri_matched = true;
            }
        }
        if ($is_uri_matched == false) {
            header('Location: /404');
        }
    }

}