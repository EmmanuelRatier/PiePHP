<?php 
namespace Core;

class Router {
    private static $routes;
    public static function connect ($url,$route) {
        self::$routes[$url] = $route;
    }

    public static function get ($url) {
        if(isset(self::$routes[$url])){
            return self::$routes[$url];
        }
    }
}
/*

Verrifié la présence de l'index c et a dans ton $_GET
generé le nom de l'objet controlle utilisé . (Usercontroller)
génere le nom de la method utilisé du controller utilisé example (Addaction)
retourne un tableau contenant les 2 valeur généré name controller et method 

man $_GET
man class_exists
man method exist
man array 
man array_key_exist


*/
?>