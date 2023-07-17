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
        $this->dolistmodel->saveList($_POST['title'], $_POST['body'], $_POST['date']);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function editList($id) {
        $dolist = $this->dolistmodel->editList($id);
        require 'view/edit.view.php';
        exit;
    }

    public function updateList() {
        $this->dolistmodel->updateList($_POST['title'], $_POST['body'],$_POST['date'], $_POST['id']);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function deleteList($id) {
        $this->dolistmodel->deleteList($id);
        // header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function statusList($id, $status) {
        $this->dolistmodel->statusList($id, $status);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

}

?>