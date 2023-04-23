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

    public function saveList ($title_raw, $body, $date) {
        $title = trim($title_raw);
        if (empty($title)) {
            exit;
        } else {
            
            if (strlen($title) > 50) {
                $title = mb_substr($title, 0, 50, "UTF-8");
            }
        }

        if (empty(trim($body))) {$body = 'No Content';}
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

    public function updateList ($title_raw, $body, $date, $id) {
        $title = trim($title_raw);
        if (empty($title)) {
            // exit;
        } else {
            
            if (strlen($title) > 50) {
                $title = mb_substr($title, 0, 50, "UTF-8");
            }
        }

        if (empty(trim($body))) {$body = 'No Content';}

        if (empty($date)) {
            $target_date = time();
        } else {
            $target_date = strtotime($date);
        }
        
        $status = 'notdone';
        $sql = "UPDATE task SET title = '$title', body = '$body', target_date = '$target_date', status = '$status' WHERE id = $id";
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