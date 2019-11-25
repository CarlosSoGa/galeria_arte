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
<h1><a>Galeria de Arte</a></h1>
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
  <p><li><a href="modificapelicula.php">Modifica Obras</a></li>
  <li><a href="modificacliente.php">Modificia clientes</a></li></p>
  <p><strong><img src="images/videoteca.jpg" alt="" width="262" height="193" /></strong> <br />
      <br />
      <br />
    </p>
</div>
<div class="articles"></div>
</div>

<div class="right">

</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>