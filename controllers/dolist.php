<?php

require 'models/dolist.php';

class Dolist {

    private $dolistmodel;

    public function __construct () {
        $this -> dolistmodel = new Dolistmodel();
    }

    public function getAllDolist() {
        $dolist = $this->dolistmodel->getAllDolist();
        require 'view/dolist.view.php';
        exit;
    }

    public function addList() {
        require 'view/add.view.php';
        exit;
    }

    public function saveList() {
        $this->dolistmodel->saveList($_POST['title'], $_POST['body']);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

}

?>