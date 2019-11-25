<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Galería de Arte</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<?PHP 
		session_start();
	if(!isset($_SESSION['username']))
		header("Location:index.php");
	
	?>

<div id="wrap">

<div id="header">
<h1><a href="#">Galeria de Arte</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="indexcliente.php">Inicio</a></li>
<li><a href="consultaClientes.php">Arte</a></li>
<li><a href="rentaClientes.php">Perfil</a></li>
<li><a href="salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Su compra se ha efectuado correctamente!</h2>
<br>
<a href='consultaClientes.php'><input type='button' value='Regresar' style='float: right;'></a>
<div class="articles">
<br />
    <br />
    <br />
      <br />
</div>
</div>
<?php
        $idd=$_POST['id'];
	
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "galeria");

	$res=mysqli_query($link,"UPDATE pelicula SET disponibilidad = 0 Where id_pelicula = $idd");

	mysqli_close($link);

?>

<div class="right"> 
<form action="validar.php" method="POST">

<h2>&nbsp;</h2>
<ul>
<li></li>
</ul>
</form>
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>