<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Galería de Arte</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #003366}
-->
</style>
</head>
<body> 
	<?PHP 
		session_start();
	if(!isset($_SESSION['username']))
		header("Location:index.php");
	   if($_SESSION['tipo']==1){
	    header("Location:indexCliente.php");
      }
	
	?>

<div id="wrap">

<div id="header">
<h1><a>Galería de Arte </a></h1>
<h2>Facultad de ciencias de la computación</h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="indexADM.php">Inicio</a></li>
<li><a href="consultaADM.php">Arte</a></li>
<li><a href="alta.php">Alta</a></li>
<li><a href="baja.php">Baja</a></li>
<li><a href="modifica.php">Modificar</a></li>
<li><a href="salir.php">Salir</a></li>

</ul>
</div>

<div id="content">
<div class="left"> 

<h2 class="Estilo1"><a>Bienvenido: <?PHP echo $_SESSION['username']; ?> </h2>
<div class="articles">
  <p>En esta pagina encontraras las obras de mayor exito a nivel internacional, donde podras realizar compra y visualización de obras para lo cual te invitamos a que te registres en la sección de <strong>&quot;Registro&quot; </strong></p>
  <p><strong><img src="images/videoteca.jpg" alt="" width="262" height="193" /></strong> <br />
      <br />
      <br />
    </p>
</div>
<div class="articles"></div>
</div>

<div class="right">
  <?php
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"galeria");
  $ranking=array();

  $result=mysqli_query($link,"select ranking from pelicula");
  while ($row= mysqli_fetch_array($result)) {
   $ra= $row["ranking"];
   array_push($ranking, $ra);
  }
  rsort($ranking);

  ?>
  <p>Obras más visualizadas </p>
  <p>1.<?php echo "$ranking[0]"; ?></p>
  <p>2.<?php echo "$ranking[1]"; ?></p>
  <p>3.<?php echo "$ranking[2]"; ?></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>