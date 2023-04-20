<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'controllers/dolist.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

$urls = explode('/',$url);

var_dump($urls);

switch ($urls[1]) {

    case 'add':
        $dolist = new Dolist ();
        $dolist->addList();
        break;

    case 'save':
        $dolist = new Dolist ();
        $dolist->saveList();
        break;

    case 'edit':
        $dolist = new Dolist ();
        $dolist->editList($urls[2]);
        break;

    case 'update':
        $dolist = new Dolist ();
        $dolist->updateList();
        break;

    case 'delete':
        $dolist = new Dolist ();
        $dolist->deleteList ($urls[2]);
        break;

    case 'status':
        $dolist = new Dolist ();
        $dolist->statusList ($urls[2],$urls[3]);
        break;

    default:
        $dolist = new Dolist ();
        $dolist->getAllDolist();
        break;
}
