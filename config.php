<?php

$config = [

    'host' => 'localhost',
    'port' => '3306',
    'database' => 'todolist',
    'username' => 'root',
    'password' => '1234',
    'site_url' => 'http://localhost:8080'

];

foreach($config as $key => $value) {
    $GLOBALS[$key] = $value;
}

?>