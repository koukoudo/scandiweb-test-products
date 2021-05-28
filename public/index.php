<?php

$config = require_once(__DIR__ . '/src/config.php');
require_once('src/controllers/ProductController.php');
require_once('src/classes/Product.php');

$url = $_SERVER['REQUEST_URI'];

$path = array_filter(explode('/', parse_url($url, PHP_URL_PATH)));

$controller = new ProductController();

if (count($path) == 0) {
    $controller->home();
} elseif ($path[1] == 'product') {
    if (count($path) > 2) {
        header("Location: {$config['urls']['listurl']}", true, 303);
    } else {
        if ($path[2] == 'insert') {
            $product = new $_POST['type']($_POST);
            $controller->insert($product->getProduct());
            header("Location: {$config['urls']['listurl']}", true, 303);
        } elseif ($path[2] == 'delete') {
            $products = json_decode($_POST['products']);
            $controller->delete($products);
        } else {
            set_error_handler(function ($severity, $message, $file, $line) {
                throw new \ErrorException($message, $severity, $severity, $file, $line);
            });

            try {
                $action = $path[2];
                $controller->$action();
            } catch (Error | ErrorException $e) {
                header("Location: {$config['urls']['listurl']}", true, 303);
            }

            restore_error_handler();
        }
    }
}  else {
    header("Location: {$config['urls']['homeurl']}", true, 303);
}