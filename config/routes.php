<?php

$router->add('GET', '/', function() use ($container){
    $pdo = $container['db'];
    var_dump($pdo);
    return 'Estamos na home';
});

$router->add('GET', '/projeto/(\d+)', function($params){
    return 'Estamos mostrando o projeto de id: '. $params[1];
});