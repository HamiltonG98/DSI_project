<?php
  require_once('autoload.php');

  class Usuario{
    private $nombres;
    private $apellidos;
    private $nombre_usuario;
    private $password;
    private $role;
    private $connection;

    public function __construct(){
      $this->connection = new db();
    }

    public function login($username, $password){
      session_start();

      $this->nombre_usuario = $username;
      $this->password = $password;

      $query = "select * from usuarios where nombre_usuario = ? and password = ? and state = 1";
      $stmt = $this->connection->connect()->prepare($query);
      $stmt->execute([$this->nombre_usuario, $this->password]);
      $user = $stmt->fetch();

      if($user){
        $_SESSION['role'] = $user['role'];
  
        header("Location: home.php");
      }else{
        $_SESSION['message'] = '¡Usuario o contraseña inválido!';
        $_SESSION['message_type'] = 'warning';
  
        header("Location: index.php");
      }
    }

    public function fetchUsers(){
      $query = 'select * from usuarios';
      $stmt = $this->connection->connect()->prepare($query);
      $stmt->execute();
      $users = $stmt->fetchAll();

      return $users;
    }

    public function insertUser($names, $lastNames, $username, $password, $role){
      $this->nombres = $names;
      $this->apellidos = $lastNames;
      $this->nombre_usuario = $username;
      $this->password = $password;
      $this->role = $role;

      $query = "insert into usuarios(nombres, apellidos, nombre_usuario, password, role) values (?,?,?,?,?)";
      $stmt = $this->connection->connect()->prepare($query);
      $result = $stmt->execute([$this->nombres, $this->apellidos, $this->nombre_usuario, $this->password, $this->role]);

      if($result){
        
      }
    }
  }
?>