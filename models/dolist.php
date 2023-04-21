<?php


require 'core/db.php';
// require 'config.php';

class Dolistmodel {

    private $db;

    public function __construct () {
        $this->db = new Db();
    }

    public function getAllDolist () {
        $sql = "SELECT * FROM `task` ORDER BY status DESC, target_date ASC"; //Not done tasks will be shown first and all the tasks will be ascending order to target date
        $stmt = $this->db->query($sql);
        $stmt -> execute();
        $dolist = $stmt -> fetchAll (PDO::FETCH_ASSOC);
        return $dolist;
    }

    public function saveList ($title, $body, $date) {
        $created_date = time();
        if ($date == '') {
            $target_date = $created_date;
        } else {
            $target_date = strtotime($date);
        }
        $status = 'notdone';
        $sql = "INSERT INTO task (title, body, created_date, target_date, status) VALUES ('$title', '$body', '$created_date', '$target_date', '$status')";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        return $stmt;
    }

    public function editList ($id) {
        $sql = "SELECT * FROM task WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $dolist = $stmt -> fetch (PDO::FETCH_ASSOC);
        return $dolist;
    }

    public function updateList ($title, $body, $id) {
        $updated_date = time();
        $target_date = time();
        $status = 'notdone';
        $sql = "UPDATE task SET title = '$title', body = '$body', created_date = '$updated_date', target_date = '$target_date', status = '$status' WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        return $stmt;
    }

    public function deleteList ($id) {
        $sql = "DELETE FROM task WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $dolist = $stmt -> fetch (PDO::FETCH_ASSOC);
        return $dolist;
    }

    public function statusList ($id, $status) {
        if ($status == 'done') {
            $new_status = 'notdone';
        } else {
            $new_status = 'done';
        }
        $sql = "UPDATE task SET status = '$new_status' WHERE id = $id";
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $dolist = $stmt -> fetchAll (PDO::FETCH_ASSOC);
        return $dolist;
    }

}

?>