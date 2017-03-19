<?php
  //include('controlador/abre_bd.php');
  $conexion = mysqli_connect('localhost', 'root', '','cementerio');
  if(mysqli_connect_errno()){
    echo "error con la conexion";
    exit();
  }
  mysqli_set_charset($conexion,"utf8"); //juego de caracteres latinos
?>

<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="../script.js"></script>
   <title></title>
</head>
<body>

<?php
  $sql="select * from productos order by producto";
  $result = mysqli_query($conexion,$sql);
?>
<div id='cssmenu'>
<ul>
   <li class='active'><a target="mainFrame" href='inc/portada.asp'><span>Productos</span></a></li>
   <?php
     while ($fila=mysqli_fetch_array($result,MYSQLI_ASSOC)){
     $numprod=$fila['idproducto'];
	    echo "<li class='has-sub'><a href='#'><span>". $fila['producto'] ."</span></a><ul>";
			 $sql2="select * from ubicaciones where idp=".$numprod." order by ubicacion";
       //echo "select * from ubicaciones where idp=".$numprod." order by ubicacion";
			 $result2 = mysql_query($conexion,$sql2);
			 while ($fila1 = mysql_fetch_array($result2,MYSQL_ASSOC)){
			 echo "<li><a target='mainFrame' href='./inc/tarjeta.asp?idp=" . $fila1['idubicacion'] . "><span>" . $fila1['ubicacion'] . "></span></a></li>";
         }
   }
   mysqli_close($conexion);
   ?>
        </ul>
     </li>

	<li class='has-sub'><a href='#'><span>Reportes</span></a>
      <ul>
         <li><a target="mainFrame" href="./inc/ndisponible.asp"><span>Nichos Adultos Disponibles</span></a></li>
		     <li><a target="mainFrame" href="./inc/nrdisponible.asp"><span>Nichos Reduccion Disponibles</span></a></li>
		     <li><a target="mainFrame" href="./inc/busquedaf.asp"><span>Busqueda de fallecidos</span></a></li>
      </ul>
   </li>

</ul>
</div>

</body>
<html>
