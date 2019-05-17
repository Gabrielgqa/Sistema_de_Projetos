<?php

use Pimple\Container;

$container = new Container();

$container['db'] = function(){
    $dsn = 'mysql:host=localhost;dbname=db_sispro';
    $username = 'root';
    $password = '';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new \PDO($dsn, $username, $password, $options);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    
    return $pdo;
};