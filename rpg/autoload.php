<?php
/**
 * Charge automatiquement les classes du projet
 * @param $class
 */
function autoloader($class){
    $parts = explode('\\' , $class);
    include end($parts).'.php';
}
spl_autoload_register('autoloader');
