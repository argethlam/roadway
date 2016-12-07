<?php

define("ABS_PATH", $_SERVER['DOCUMENT_ROOT'] . '/');

// Basic class autoload implementation
spl_autoload_register(
    function ($class) {
        $class = str_replace('\\', '/', $class);
        include ABS_PATH . "app/" . $class . '.php';
    }
);
