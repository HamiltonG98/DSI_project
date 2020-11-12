<?php session_start() ?>

<?php include('includes/header.php') ?>

<?php 
  if(isset($_SESSION['role'])){
    header('location: home.php');
  }
?>

<div class="row justify-content-center">
  <div class="col-4 mt-5">
    <div class="card w-100 p-3 text-white bg-danger" id="card-login">
      <img src="./img/blood-donation.png" class="card-img-top" width="300" id="loginImg">
      <div class="card-body text-center">
        <h1 class="card-title text-center">Inicio de Sesión BDS</h1>
        <?php if(isset($_SESSION['message'])){ ?>
        <div class="alert alert-<?php echo $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <i class="fas fa-exclamation-triangle"></i><?php echo $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php } unset($_SESSION['message']); unset($_SESSION['message_type']); ?>
        <form action="login.php" method="POST">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" placeholder="Nombre de Usuario" class="form-control rounded-right"
              required>
          </div>
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" placeholder="Contraseña" class="form-control rounded-right" required>
          </div>
          <button name="login" class="btn btn-primary mt-3">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>