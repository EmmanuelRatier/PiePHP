<?php
namespace Core;

class Core {
    public function run() {
        echo __CLASS__ . " [OK]" . PHP_EOL;

        require 'routes.php';
        $url = str_replace(BASE_URI,'', $_SERVER['REQUEST_URI']);
        $router = Router::get($url);
        var_dump($router);
        
        $control = ucfirst($_GET['c'])."Controller";
        $action = ucfirst($_GET['a'])."Action";
        $dir = str_replace("Core", "src/Controller", __DIR__);
        var_dump($dir."/".$control);
       if(is_file($dir."/".$control.".php"))
       {
           include($dir."/".$control.".php");
           $controller = new $control();
           $controller->$action();
       }
       else
       {
        include($dir."/"."AppController.php");
       }
    }
}

?>