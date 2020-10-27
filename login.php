<?php
  require_once('autoload.php');

  if(isset($_POST['login'])){
    $objUser = new Usuario();

    $objUser->login($_POST['username'], $_POST['password']);
  }
?>