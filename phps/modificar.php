<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php');
    exit("bye");
  }
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
  <title>Modificar User</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/signin.css">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      body{
        background-image: url("../images/carousel1.jpg");
        background-size: cover;
        background-attachment: fixed;
      }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="text-center"> 
  <?php
    if (!isset($_GET['id'])){
      header('Location: ../admin/home.php');
      exit("bye");
    }
    include_once "conexion.php";
    $objeto = new DataBaseServer();
    $conexion = $objeto->getConnection();

    $id_usuario = $_GET['id'];
    $consulta = "SELECT * FROM usuarios WHERE uid=$id_usuario";
    $resultado = $conexion->query($consulta);
    $fila = mysqli_fetch_assoc($resultado);
  ?>

<main class="form-signin2">
  <form action="user_modified.php" method="post">
    <img class="mb-4" src="../images/register.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal text-white">
      Modifica al Usuario <?php echo $fila['nombre']; ?>
    </h1>

    <input type="hidden" name="id_oculto" value="<?php echo $fila['uid']; ?>"/>

    <div class="row">
      <div class="form-floating col-6 mb-2">
        <input type="text" name="FirstName" value="<?php echo $fila['nombre']; ?>" required class="form-control" id="floatingInputFN" placeholder="Lopez">
        <label for="floatingInputFN">First Name</label>
      </div>
      
      <div class="form-floating col-6 mb-2">
        <input type="text" name="LastName" value="<?php echo $fila['apellidos']; ?>" required class="form-control" id="floatingInputLN" placeholder="Sanchez">
        <label for="floatingInputLN">Last Name</label>
      </div>
    </div>


    <div class="form-floating mb-2">
      <input type="text" name="Address" value="<?php echo $fila['token']; ?>"required class="form-control" id="floatingInputA" placeholder="Madero #345 Col Centro">
      <label for="floatingInputA">Address</label>
    </div>

    <div class="row">
      <div class="form-floating col-6 mb-2">
        <input type="tel" name="Cellphone" value="<?php echo $fila['tipo']; ?>"required class="form-control" id="floatingInputT" placeholder="name@example.com">
        <label for="floatingInputT">Cellphone</label>
      </div>

      <div class="form-floating col-6 mb-2">
        <input type="number" name="Edad" value="<?php echo $fila['uid']; ?>" required class="form-control" id="floatingInputT" placeholder="name@example.com">
        <label for="floatingInputT">Edad</label>
      </div>
    </div>
    
    <div class="form-floating mb-2">
      <input type="email" name="Email" value="<?php echo $fila['email']; ?>" required class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating mb-2">
      <input type="password" name="Password" value="<?php echo $fila['password']; ?>" required class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Modificar Usuario</button>
    <p class="mt-5 mb-3 text-white">&copy; 2021-2022 By <i>Timo</i> </p>
  </form>
</main>
    
  </body>
</html>