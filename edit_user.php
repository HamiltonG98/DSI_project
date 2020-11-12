<?php session_start() ?>
<?php require_once('autoload.php') ?>
<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<?php
  if(!isset($_SESSION['role'])){
    header('location: index.php');
  }

  if(isset($_GET['id'])){
    $objUser = new Usuario();
    $user = $objUser->getUserById($_GET['id']);
  }

  if(isset($_POST['update'])){
    $objUser = new Usuario();
    $objUser->updateUser(
      $_POST['id'],
      $_POST['names'], 
      $_POST['lastNames'], 
      $_POST['username'], 
      $_POST['password'], 
      $_POST['role']
    );
  }
?>

<div class="container mt-5">
  <h1 class="text-center">Editar Usuario</h1>
  <?php if(isset($_SESSION['message']) && isset($_GET['id'])){ ?>
  <div class="alert alert-<?php echo $_SESSION['message_type'] ?>" role="alert">
    <?php echo $_SESSION['message'] ?>
  </div>
  <?php unset($_SESSION['message']); unset($_SESSION['message_type']); } ?>
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card p-4 mb-5">
        <form action="edit_user.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <div class="form-group">
            <label for="names">Nombres</label>
            <input type="text" class="form-control" id="names" name="names" required
              value="<?php echo $user['nombres'] ?>">
          </div>
          <div class="form-group">
            <label for="lastNames">Apellidos</label>
            <input type="text" class="form-control" id="lastNames" name="lastNames" required value="<?php echo $user['apellidos'] ?>">
          </div>
          <div class="form-group">
            <label for="username">Nombre de Usuario</label>
            <input type="text" class="form-control" id="username" name="username" required value="<?php echo $user['nombre_usuario'] ?>">
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required value="<?php echo $user['password'] ?>">
          </div>
          <div class="form-group">
            <label for="role">Rol</label>
            <select id="role" class="form-control" name="role" required>
              <option disabled value="">Seleccionar...</option>
              <option value="0" <?php if($user['role'] == 0) echo 'selected = "selected"' ?>>Admin</option>
              <option value="1" <?php if($user['role'] == 1) echo 'selected = "selected"' ?>>Digitador</option>
              <option value="2" <?php if($user['role'] == 2) echo 'selected = "selected"' ?>>Supervisor</option>
            </select>
          </div>
          <button class="btn btn-success w-100 mt-3" name="update">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>