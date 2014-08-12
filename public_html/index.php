<?php

    define('SRC_DIR', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .  'src' . DIRECTORY_SEPARATOR);
    define('VENDOR_NAME', 'OO');
    define('VENDOR_DIR', SRC_DIR . DIRECTORY_SEPARATOR . VENDOR_NAME . DIRECTORY_SEPARATOR);
    define('AUTOLOAD_FILE', SRC_DIR . 'autoload.php');

    require_once AUTOLOAD_FILE;

    require_once VENDOR_DIR . 'clientes.php';