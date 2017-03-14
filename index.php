<?php
  include('controlador/abre_bd.php');
?>

	<html>
	<head>
	<title>Sistema de Control y Gestion Cementerio</title>
	</head>

				<frameset rows="160,*" cols="*" frameborder="no" border="0" framespacing="0">
					<frame src="./arriba.asp" name="topFrame" scrolling="no" noresize >
					<frameset cols="220,*" frameborder="no" border="0" framespacing="0">
						<frame src="./menu.asp" name="leftFrame" scrolling="yes" noresize>
						<frame src="./inc/portada.asp" name="mainFrame" scrolling="yes">
					</frameset>
				</frameset>

	</html>

  <?php
    include('controlador/cierra_bd.php');
  ?>
