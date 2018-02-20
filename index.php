<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/core/bootstrap.php';

use App\Core\Request;
use App\Core\Router;

try {
    Router::load('app/routes.php')
        ->direct(Request::uri(), Request::method());
} catch (Exception $e) {
    echo $e;
}
