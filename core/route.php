<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'controllers/dolist.php';
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

$url = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

switch ($url) {

    case '/add':
        $dolist = new Dolist ();
        $dolist->addList();
        break;

    case '/save':
        $dolist = new Dolist ();
        $dolist->saveList();
        break;

    default:
        $dolist = new Dolist ();
        $dolist->getAllDolist();
        break;
}
