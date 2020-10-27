<?php session_start() ?>
<?php require_once('autoload.php') ?>
<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<div class="container mt-3">
  <h1>Lista de Usuarios</h1>
  <div class="row justify-content-end mt-4">
    <a href="new_user.php" class="btn btn-success"><i class="fas fa-plus"></i> Agregar Usuario</a>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <table class="table table-hover table-danger table-striped">
        <thead>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Nombre de Usuario</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $objUser = new Usuario(); 
            $users = $objUser->fetchUsers();
            foreach($users as $user){
          ?>
            <tr>
              <td><?php echo $user['nombres'] ?></td>
              <td><?php echo $user['apellidos'] ?></td>
              <td><?php echo $user['nombre_usuario'] ?></td>
              <td><?php echo $user['password'] ?></td>
              <?php if($user['role'] == 0){ ?>
              <td>Admin</td>
              <?php }else if($user['role'] == 1){ ?>
              <td>Digitador</td>
              <?php }else if($user['role'] == 2){ ?>
              <td>Supervisor</td>
              <?php } ?>
              <td>
                <a href="edit_user.php?id=1" class="btn btn-secondary mr-2"><i class="fas fa-pen"></i></a>
                <a href="delete_user.php" class="btn btn-danger mr-2"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>