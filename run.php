<?php

requires_once("config.php");

// Lets not do a long list of requires
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

phpinfo();

?>