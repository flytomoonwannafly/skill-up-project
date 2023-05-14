<?php

namespace Application\Core;

use Application\Controller\ControllerApplication;

class Route
{

    static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'Application';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }
        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }
        // добавляем префиксы
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller' . ucfirst($controller_name);
        $action_name = 'action_' . $action_name;

        /*
        echo "Model: $model_name <br>";
        echo "Controller: $controller_name <br>";
        echo "Action: $action_name <br>";
        */

        // подцепляем файл с классом модели (файла модели может и не быть)

        $model_file = $model_name . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include "application/models/" . $model_file;
        }


        // создаем контроллер
        $class = '\Application\Controller\\' . $controller_name;

        $instance = new $class();
        if (!class_exists($class) or ((!empty($routes[2])) && (!is_callable(array($instance, $action_name))))) {
            $class = new ControllerApplication();
            $class->wrong_page();
            return;
        }

        call_user_func(array($instance, $action_name));

    }

    static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }

}
