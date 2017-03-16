<?php
  $conexion = mysql_connect('localhost', 'root', '');
  mysql_select_db("cementerio",$conexion) or die ("Error: no es posible conectar a la BD");
?>
