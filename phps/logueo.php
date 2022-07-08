<?php 
  include_once './conexion.php';
  session_start();
  $objeto = new DataBaseServer();
  $conn = $objeto->getConnection();

  //$_GET
  //$_POST     --> Variables de PHP para guardar la informacion
  //$_SESSION

  // isset   --> funcion para saber si existe una variable.
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $correo = $_POST['email'];
    $pass = $_POST['password'];
    $sentencia_sql = "SELECT * FROM usuarios WHERE email='$correo' AND password='$pass'";
    $resultado = mysqli_query($conn, $sentencia_sql);
    $contador = mysqli_num_rows($resultado);
    if ($contador == 1) {
      //$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
      $_SESSION['usuario'] = $correo;
      $objeto->closeConnection($conn);
      header('Location: ../admin/home.php');
    }else{
      header('Location: ../login.php');
      $objeto->closeConnection($conn);
      exit();
    }
  }
?>