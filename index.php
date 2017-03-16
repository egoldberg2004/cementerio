<?php
  //include('controlador/abre_bd.php');
?>

	<html>
	<head>
	<title>Sistema de Control y Gestion Cementerio</title>
	</head>

				<frameset rows="160,*" cols="*" frameborder="no" border="0" framespacing="0">
					<frame src="vista/arriba.php" name="topFrame" scrolling="no" noresize >
					<frameset cols="220,*" frameborder="no" border="0" framespacing="0">
						<frame src="vista/menu.php" name="leftFrame" scrolling="yes" noresize>
						<frame src="vista/portada.php" name="mainFrame" scrolling="yes">
					</frameset>
				</frameset>

	</html>

  <?php
    //include('controlador/cierra_bd.php');
  ?>
