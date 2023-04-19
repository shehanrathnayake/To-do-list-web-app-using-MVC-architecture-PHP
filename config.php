<?php

$config = [

    'host' => 'localhost',
    'port' => '8080',
    'database' => 'todolist',
    'username' => 'root',
    'password' => 'ShehanDj.123',
    'site_url' => 'http://localhost:8000'

];

foreach($config as $key => $value) {
    $GLOBALS[$key] = $value;
}

?>