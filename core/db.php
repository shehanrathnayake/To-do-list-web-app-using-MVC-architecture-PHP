<?php

require 'config.php';

class Db {
  private $conn;

  public function __construct() {

    try {
      $dsn = "mysql:host=$GLOBALS[host];dbname=$GLOBALS[database];dbport=$GLOBALS[port]";

      // $dsn = "mysql:host=$this->host;dbname=$this->database;dbport=$this->port";
      $options = [
        PDO::ATTR_ERRMODE => true,
        PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION
      ];

      $conn = new PDO($dsn, $GLOBALS['username'], $GLOBALS['password'], $options);

      // set the PDO error mode to exception
      $this->conn = $conn;
      // echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      die;
    }

  }

  public function query ($sql){
    $stmt = $this->conn->prepare($sql);
    return $stmt;
  }

}


?>