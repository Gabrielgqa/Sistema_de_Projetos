<?php

require __DIR__.'/vendor/autoload.php';

$router = new GGQA\Framework\Router;

$router->add('GET', '/', function(){
    return 'Estamos na home';
});

$router->add('GET', '/projeto/(\d+)', function($params){
    return 'Estamos mostrando o projeto de id: '. $params[1];
});

try {
    echo $router->run();
} catch (\GGQA\Framework\Exceptions\HttpException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
