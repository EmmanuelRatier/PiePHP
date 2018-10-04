<?php
namespace Core;

class Core {
    public function run() {
        echo __CLASS__ . " [OK]" . PHP_EOL;

        require 'routes.php';
        $url = substr($_SERVER['REQUEST_URI'], strlen(BASE_URI));

        $router = Router::get($url);

        $control = "src\Controller\\" . ucfirst($router['controller'])."Controller";
        $action = ucfirst($router['action'])."Action";
        var_dump($control, $action, $router);
        
       if(!is_null($router))
       {
           $controller = new $control();
           $controller->$action();
       }
       else
       {
            var_dump($control, $controller, $action, $router);
           // header("location:" . BASE_URI . '/404');
       }
    }
}

?>