<?php
  //session_start();
  class db{
    private $connectionString = 'mysql:host=127.0.0.1; dbname=BDS_php';
    private $user = 'root';
    private $password = 'makeherhappy';
    private $connect;

    public function __construct(){
      try {
        $this->connect = new PDO($this->connectionString, $this->user, $this->password);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
        echo "Error:" . $e->getMessage();
      }
    }

    public function connect(){
      return $this->connect;
    }
  }
?>