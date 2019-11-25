<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Galería de Arte</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href="#">Galeria de Arte</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="consulta.php">Arte</a></li>
<li><a href="registro.php">Registro</a></li>
<li><a href="acerca.php">Acerca de</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Detalle de obra</h2>
<p><?php
	$res=$_GET['id_pelicula'];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"galeria");

	$result=mysqli_query($link,"select * from pelicula where id_pelicula=$res");

	$row= mysqli_fetch_array($result);
		$id= $row["id_pelicula"];
		$ti= $row["titulo"];
		$di= $row["director"];
		$ac= $row["actor"];
		$im= $row["imagen"];
		$de= $row["descripcion"];

		echo "<img src='MisImagenes/$im' width=250 height=250 /><br><hr>";
		echo "Titulo de la obra: $ti <br>";
		echo "Artista: $di <br>";
		echo "Lugar: $ac <br>";
		echo "Sinopsis:<br> $de <br>";
		
	
		echo "<a href='consulta3.php?id_pelicula=$id'><input type='button' value='Consultar precio' style='float: right;'></a>";
	mysqli_free_result($result);
	mysqli_close($link);
	?></p>
<br>
<br>

<div class="articles">
<br />
    <br />
    <br />
      <br />
</div>
</div>

<div class="right"> 
<form action="validar.php" method="POST">
<h2>Login:</h2>
<ul>
<li><input type="text" name="nombre" size="15" required /></li>
</ul>

<h2>Password:</h2>
<ul>
<li><input type="password" name="passwd" size ="15" required /></li>
</ul>
<input type="submit" name="enviar" value="Acceder"/>
<input type="submit" name="enviar" value="Recuperar"/>
</form>
</div>
<div style="clear: both;"> </div>
</div>



</body>
</html>