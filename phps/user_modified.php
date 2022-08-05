<?php
  include_once './conexion.php';
  session_start();

  if (isset($_POST['FirstName']) && isset($_POST['LastName']) 
    && isset($_POST['Address']) && isset($_POST['Cellphone']) 
    && isset($_POST['Edad']) && isset($_POST['Email']) 
    && isset($_POST['Password'])) {
    $objeto = new DataBaseServer();
    $conexion = $objeto->getConnection();
    //Obtener los valores del formulario en variables.
    $nombre = $_POST['FirstName'];
    $apellidos = $_POST['LastName'];
    $direccion = $_POST['Address'];
    $edad = $_POST['Edad'];
    $telefono = $_POST['Cellphone']; 
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    /* 
    $sql = "SELECT MAX(uid) as id FROM usuarios";
    $result = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($result); */
    $ultimo_id = $_POST['id_oculto'];

    $update1 =  "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', 
    email='$email', password='$password', tipo='user', token=null 
    WHERE uid=$ultimo_id";
    $update2 =  "UPDATE datos_usuarios SET nombre='$nombre',  
      apellidos='$apellidos', correo='$email', password='$password', 
      tipo='user', token=null 
      WHERE id_usuario=$ultimo_id";
    $update3 =  "UPDATE telefonos SET telefono=$telefono 
      WHERE id_telefono=$ultimo_id";

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site of designers of home.">
  <meta name="author" content="Timo Ruiz">
  <meta name="keywords" content="home, design, interior">
  <title>Actualizacion User</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="./images/logo.png" width="45" height="45" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-expanded="false" aria-controls="navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">Home</a>
          </li>
         <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown-4" data-bs-toggle="dropdown" aria-expanded="false">Designs</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown-4">
              <li><a href="ecological.php" class="dropdown-item">Ecological</a></li>
              <li><a href="modern.php" class="dropdown-item">Modern</a></li>
              <li><a href="classic.php" class="dropdown-item">Classic</a></li>
              <li><a href="jounger.php" class="dropdown-item">Younger</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="projects.php" class="nav-link">Projects</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="bg-light p-3 m-3 rounded">
      <h1> 
        <?php
         if(!$conexion->query($update1))
            echo "Error update1: " . $conexion->errno . " er " . $conexion->error;
          else
            echo "Usuario Modificado.";
         ?>
      </h1>
      <p class="lead text-lg-center">
        Actualizacion de <?php echo $nombre. " " . $apellidos; ?> realizada.
        <a href="../admin/home.php">Regresar al Home.</a>
      </p>
      <div class="row m-5 p-5">
        <div class="col-6">
          <p class="lead text-lg-center">Dale click aqui para continuar. <a href="../admin/home.php"> Aqui</a></p>
        </div>
      </div>
      
    </div>
  </div>

  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
     <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="./images/logo.png" width="45" height="45" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-expanded="false" aria-controls="navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">Home</a>
          </li>
         <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown-4" data-bs-toggle="dropdown" aria-expanded="false">Designs</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown-4">
              <li><a href="ecological.php" class="dropdown-item">Ecological</a></li>
              <li><a href="modern.php" class="dropdown-item">Modern</a></li>
              <li><a href="classic.php" class="dropdown-item">Classic</a></li>
              <li><a href="jounger.php" class="dropdown-item">Younger</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="projects.php" class="nav-link">Projects</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="../js/bootstrap.js"></script>
</body>
</html>

<?php

  }else{
    echo "Error algun dato esta incorrecto.";
  }

  //TAREA 
  // Investigar Lenguajes de Backend (Caracteristicas)
  // Ejemplos: PHP, Java, JavaScript, Python, Ruby, Rust, kotlin, TypeScript
  // 
  // En base a sus caracteristicas elegir cual usarias en tu proyecto.

?>