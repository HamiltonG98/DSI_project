<?php
  include('db.php');

  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from usuarios where nombre_usuario = :username and password = :password";

    $stmt = $conn->prepare($query);
    $stmt->execute([':username'=>$username, ':password'=>$password]);

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
?>