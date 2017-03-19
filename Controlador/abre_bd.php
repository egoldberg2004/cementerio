<?php
$conexion = mysqli_connect('localhost', 'root', '','cementerio');
if(mysqli_connect_errno()){

  echo "error con la conexion";
  exit();
}
mysqli_set_charset($conexion,"utf8"); //juego de caracteres latinos

?>
