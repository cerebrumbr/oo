<?php
    ini_set('error_reporting', E_ALL);

    $url = 'http://' . $_SERVER['HTTP_HOST'];

    define('BASE_URL', $url);
    define('PUBLIC_HTML', __DIR__ . DIRECTORY_SEPARATOR);
    define('SRC_DIR', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
    define('VENDOR_NAME', 'OO');
    define('VENDOR_DIR', SRC_DIR . DIRECTORY_SEPARATOR . VENDOR_NAME . DIRECTORY_SEPARATOR);
    define('AUTOLOAD_FILE', SRC_DIR . 'autoload.php');

    $url = parse_url($url . $_SERVER['REQUEST_URI']);

    $path = explode('/', ltrim($url['path'], '/'));

    if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
        return false;
    } else {
        $pagina = (!isset($path[0]) || empty($path[0]) ? 'home' : $path[0]) . '.php';
        $arquivo =  PUBLIC_HTML . $pagina;

        if(file_exists($arquivo)) {
            require_once AUTOLOAD_FILE;

            require_once VENDOR_DIR . 'clientes.php';

            include $arquivo;
        } else {
            http_response_code(404);
            echo '<h1>erro 404<h1>';
        }
    }