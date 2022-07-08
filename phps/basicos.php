<?php

//Para comentarios se usan dos diagonales.

//Para crear variables se usa el simbolo $
$nombre = "Juanito";
$edad = 90;
$estatura = 1.76;
$virginidad = True;

//Para enviar mensajes a pantalla echo, print 
echo "<h1>Hola mundo Backend con PHP</h1>";
echo 'Bienvenido '.$nombre.' tienes '.$edad.' y comienza el bello mundo del backend.';
echo '<br>Tu virginidad es '.$virginidad;

//Estructuras de control de decisión if else 
if ($edad > 17 && $edad < 65) {
  echo '<p>Ya eres legal '.$nombre.' </p>';
} else if($edad > 65) {
  echo '<p>Ya no estas en condiciones '.$nombre.'</p>';
} else{
  echo '<p>Todavia eres un Chaval '.$nombre.'</p>';
}

// TAREA 
// ESTRUCTURAS DE REPETICION FOR, WHILE, forEach

for($galleta=0; $galleta<10; $galleta++){
  echo '<p>POR QUE TE COMISTE LAS GALLETAS '.$nombre.' !!!!</p>';
  echo '<p>YA LLEVAS '.$galleta.' GALLETAS.</p>';
}

$cantidad = 1;
while($cantidad < 10){
  echo '<p>La cantidad '.$cantidad.' es menor a 10.</p>';
  $cantidad++;
}

$conjunto = array(1,2,3,4,5,6,7,8,9,10,11);
forEach($conjunto as &$laQueSea){
  $laQueSea2 = $laQueSea * 2;
  echo $laQueSea . ' x 2 = ' . $laQueSea2 . '<br>'; 
}

//POO en PHP
class Alumno{
  private $name = "Tathan";
  private $email = "tathan234@gmail.com";
  private $password = "#$#FD#$#dS";
  public $edad = 86;

  public function fumar(){
    $this->email = "elfumador@gmail.com";
    echo 'El '.$this->name.' es fumador y su correo es '.$this->email.'<br>';
  }
  public function tomar(){
    $this->password = "elBorolas";
    return $this->password;
  }
  public function pelear($rival){
    $this->name = "El Canelo";
    $fight = $this->name . ' vs ' .$rival;
    return $fight;
  }
}

$tathan1 = new Alumno();
echo '<br>';
$tathan1->fumar();
echo '<br>';
echo $tathan1->tomar();
echo '<br>';
echo $tathan1->pelear("Julcito");

?>