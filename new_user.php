<?php session_start() ?>
<?php require_once('autoload.php') ?>
<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<?php
  if(isset($_POST['register'])){
    $objUser = new Usuario();
    $objUser->insertUser(
      $_POST['names'], 
      $_POST['lastNames'], 
      $_POST['username'], 
      $_POST['password'], 
      $_POST['role']
    );
  }
?>

<div class="container mt-5">
  <h1 class="text-center">Crear Usuario</h1>
  <?php if(isset($_SESSION['message']) && !isset($_POST['register'])){ ?>
  <div class="alert alert-<?php echo $_SESSION['message_type'] ?>" role="alert">
    <?php echo $_SESSION['message'] ?>
  </div>
  <?php unset($_SESSION['message']); unset($_SESSION['message_type']); } ?>
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card p-4 mb-5">
        <form action="new_user.php" method="POST">
          <div class="form-group">
            <label for="names">Nombres</label>
            <input type="text" class="form-control" id="names" name="names" required>
          </div>
          <div class="form-group">
            <label for="lastNames">Apellidos</label>
            <input type="text" class="form-control" id="lastNames" name="lastNames" required>
          </div>
          <div class="form-group">
            <label for="username">Nombre de Usuario</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="role">Rol</label>
            <select id="role" class="form-control" name="role" required>
              <option disabled selected value="">Seleccionar...</option>
              <option value="0">Admin</option>
              <option value="1">Digitador</option>
              <option value="2">Supervisor</option>
            </select>
          </div>
          <button class="btn btn-success w-100 mt-3" name="register">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>