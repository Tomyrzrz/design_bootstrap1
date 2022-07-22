<?php
  session_start(); //Debe haber una sesion iniciada.
  if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit('GoodBye'); //Todo lo que sigue del archivo, YA no SE EJECUTA
  }
  require_once '../phps/conexion.php';
  $objeto = new DataBaseServer();
  $conexion = $objeto->getConnection();
  $sentencia = "SELECT * FROM usuarios"; //Requieres una consulta con JOIN 
          //Todas las tablas.
  $resultado = mysqli_query($conexion, $sentencia);

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
  <title>Home Admin</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="../images/logo.png" width="45" height="45" alt="logo">
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
            <a href="logout.php" class="nav-link">LogOut</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container m-4">
    <div class="bg-dark p-3 rounded">

      <table class="table table-light table-bordered table-responsive">
        <thead>
          <tr>
            <th>UID</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>TIPO</th>
            <th>TOKEN</th>
            <th colspan="2">ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $contador = 0;
            while($fila = mysqli_fetch_assoc($resultado)){
              $contador++;
          ?>
          <tr>
            <td> <?php echo $fila['uid']; ?> </td>
            <td> <?php echo $fila['nombre']; ?> </td>
            <td> <?php echo $fila['apellidos']; ?> </td>
            <td> <?php echo $fila['email']; ?> </td>
            <td> <?php echo $fila['password']; ?> </td>
            <td> <?php echo $fila['tipo']; ?> </td>
            <td> <?php echo $fila['token']; ?> </td>
            <td> 
              <button type="button" class="btn btn-warning">Modificar</button>  
            </td>
            <td> 
              <button type="button" class="btn btn-danger">Eliminar</button>  
            </td>
          </tr>
          <?php } $objeto->closeConnection($conexion); ?>
        </tbody>
        <tfoot>
          <tr>
            <td><b>Total de usuarios:</b></td>
            <td> <?php echo $contador; ?> </td>
          </tr>
        </tfoot>
      </table>

  
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