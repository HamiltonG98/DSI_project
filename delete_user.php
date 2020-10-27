<?php
  require_once('autoload.php');

  if(isset($_GET['id'])){
    $objUser = new Usuario();
    $objUser->deleteUser($_GET['id']);
  }
?>