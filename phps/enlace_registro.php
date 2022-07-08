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
    $sql = "SELECT MAX(uid) as id FROM usuarios";
    $result = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($result);
    $ultimo_id = $fila['id'] + 1;
    $insert1 =  "INSERT INTO usuarios values ($ultimo_id, 
      '$nombre', '$apellidos', '$email', '$password', 'user', null)";
    $insert2 =  "INSERT INTO datos_usuarios values ($ultimo_id, 
      '$nombre', '$apellidos', '$email', '$password', 'user', null)";
    $insert3 =  "INSERT INTO telefonos values ($ultimo_id, $telefono)";
    
    if(!$conexion->query($insert1))
      echo "Error insert1: " . $conexion->errno . " er " . $conexion->error;
    
    if(!$conexion->query($insert2))
      echo "<br>Error insert2: " . $conexion->errno . " er " . $conexion->error;
    
      //TAREA COMPLETAR EL PROCEDIMIENTO.
  }else{
    echo "Error algun dato esta incorrecto.";
  }

?>