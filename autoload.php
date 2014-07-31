<?php
    function __autoload($class_name) {
        require_once "class/" . $class_name . '.php';
    }