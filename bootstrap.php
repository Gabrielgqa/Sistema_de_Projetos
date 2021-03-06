<?php

require __DIR__.'/vendor/autoload.php';

$router = new GGQA\Framework\Router;

require __DIR__.'/config/containers.php';
require __DIR__.'/config/routes.php';

try {
    echo $router->run();
} catch (\GGQA\Framework\Exceptions\HttpException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
