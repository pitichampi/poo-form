<?php
function autoloader($class){
    $parts = explode('\\' , $class);
    include end($parts).'.php';
}
spl_autoload_register('autoloader');
