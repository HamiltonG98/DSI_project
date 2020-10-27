<?php require_once('autoload.php') ?>
<?php session_start() ?>
<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<?php
  if(isset($_POST['resgister'])){
    
  }
?>

<div class="container mt-5">
  <h1 class="text-center">Crear Usuario</h1>
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