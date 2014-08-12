<?php
    define("CLASS_DIR", __DIR__ . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR);

    spl_autoload_register(function($class) {
        $className = CLASS_DIR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";

        if(file_exists($className)) {
            include($className);
        }
    });