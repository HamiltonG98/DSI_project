<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">
    <img src="./img/blood-test.svg" width="30" height="30" alt="" loading="lazy">
    Banco de Sangre
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Acerca</a>
      </li> -->
    </ul>
    <div class="form-inline">
      <span><?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos'] ?></span>
      <a href="logout.php" class="btn"><i class="fas fa-sign-out-alt"></i></a>
    </div>
</nav>