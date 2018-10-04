<?php
spl_autoload_register('myAutoloader');

function myAutoloader($class){
    $path = str_replace('\\','/', $class);
    include $path.'.php';
};
?>