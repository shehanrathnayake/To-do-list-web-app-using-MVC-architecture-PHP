<?php


require 'core/db.php';
// require 'config.php';

class Dolistmodel {

    private $db;

    public function __construct () {
        $this->db = new Db();
    }

    public function getAllDolist () {
        $sql = 'SELECT * FROM task';
        $stmt = $this->db->query($sql);
        $stmt -> execute();
        $dolist = $stmt -> fetchAll (PDO::FETCH_ASSOC);
        return $dolist;
    }

    public function saveList ($title, $body) {
        $created_date = time();
        $target_date = time();
        $status = 'notdone';
        $sql = "INSERT INTO task (title, body, created_date, target_date, status) VALUES ('$title', '$body', '$created_date', '$target_date', '$status')";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        return $stmt;
    }

}

?>