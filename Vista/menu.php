<?php
  include('controlador/abre_bd.php');
?>

<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title></title>
</head>
<body>

<?php
  $SQL="select * from productos order by producto";
  $result = mysql_query($SQL);
?>
<div id='cssmenu'>
<ul>
   <li class='active'><a target="mainFrame" href='inc/portada.asp'><span>Productos</span></a></li>
   <?php
     while ($registro = mysql_fetch_array($result)){
     $numprod=$registro['idproduto'];
	    echo "<li class='has-sub'><a href='#'><span>". $registro['producto'] ."</span></a><ul>";

			 $sql2="select * from ubicaciones where idp=".$numprod." order by ubicacion";
			 $result2 = mysql_query($SQL2);
			 while ($registro2 = mysql_fetch_array($result2)){
			 echo "<li><a target='mainFrame' href='./inc/tarjeta.asp?idp=" . $result2['idubicacion'] . "><span>" . $result2['ubicacion'] . "></span></a></li>";
         }
   }
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
