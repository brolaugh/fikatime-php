<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 7:49 PM
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

//Define autoloader
function __autoload($className) {
    $className = str_replace("\\", "/", $className);
    if (file_exists($className . '.php')) {
        require_once $className . '.php';
        return true;
    }
    return false;
}

function canClassBeAutloaded($className) {
    return class_exists($className);
}
