<?php

$config = [

    'host' => 'localhost',
    'port' => '3306',
    'database' => 'todolist',
    'username' => 'root',
    'password' => 'root',
    'site_url' => 'http://localhost:8000'

];

foreach($config as $key => $value) {
    $GLOBALS[$key] = $value;
}

?>