<?php
spl_autoload_register(function($class) {
    include str_replace('\\', '/', $class) . '.php';
    var_dump($class);
});
?>