<?php

$config = [

    'host' => 'localhost',
    'port' => '8080',
    'database' => 'todolist',
    'username' => 'root',
    'password' => 'ShehanDj.123',
    'site_url' => 'localhost:8080'

];

foreach($config as $key => $value) {
    $GLOBALS[$key] = $value;
}

?>