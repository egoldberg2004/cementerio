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
SQL="select * from productos order by producto"
set rcc=server.createobject("adodb.recordset")
rcc.open sql,conexion,3
?>
<div id='cssmenu'>
<ul>
   <li class='active'><a target="mainFrame" href='inc/portada.asp'><span>Productos</span></a></li>
   <?php
     if rcc.recordcount>0 then
	      while not rcc.eof
	      numprod=rcc("idproducto")
	 ?>
      <li class='has-sub'><a href='#'><span><%=rcc("producto")%></span></a>
         <ul>
			 <?php
			 sql="select * from ubicaciones where idp="&numprod &" order by ubicacion"
			 set rx=server.createobject("adodb.recordset")
			 rx.open sql,conexion,3
			 while not rx.eof
			 ?>
				<li><a target="mainFrame" href="./inc/tarjeta.asp?idp=<%=rx("idubicacion")%>"><span><%=rx("ubicacion")%></span></a></li>
			 <?php
			 rx.movenext
			 wend
			 rx.close
			 ?>
        </ul>
     </li>
   <?php
   rcc.movenext
   wend
   rcc.close
   END IF
   ?>

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
