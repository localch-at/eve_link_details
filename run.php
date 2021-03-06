<?php

require_once("config.php");

// Lets not do a long list of requires
spl_autoload_register(function ($class) {
    require_once('classes/' . $class . '.class.php');
});

echo("<pre>");

$reddit = new reddit();

try {
    $reddit->login(REDDIT_NAME, REDDIT_PASSWORD);
} catch (Exception $e) {
    exit($e->getMessage());
}

var_dump($reddit->getNewPosts("eve"));

echo($reddit::table(array("Hi", "bob", "Um"), array(array("hi", "bob", "pls"), array("high", "blob")), 3));

echo("</pre>");

?>