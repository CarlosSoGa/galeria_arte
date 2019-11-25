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
<li><a href="altapelicula.php">Alta de Obra</a></li>
<li><a href="salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Consulta de Obras de Arte</h2>
<div class="articles">Listado de Obras disponibles actualmente<br />
    <p>
	  <?php
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"Galeria");

	$result=mysqli_query($link,"select * from pelicula");
	echo "<table border=1>";
	echo"<TR><td>ID </td><td>Titulo</td><td>Director</td><td>Actor</td><td>Imagen</td><td>Ranking</td></tr>";

	while ($row= mysqli_fetch_array($result)) {
		$id= $row["id_pelicula"];
		$ti= $row["titulo"];
		$di= $row["director"];
		$ac= $row["actor"];
		$im= $row["imagen"];
		$ra= $row["ranking"];

		echo "<tr><td>$id</td><td> $ti</td> <td>$di</td><td> $ac</td> <br>
				<td> <a href='consultaClientes2.php?id_pelicula=$id'> <img src='MisImagenes/$im' width=60 height=60 /> </td></a><td>$ra</td></tr>";
	}
	echo "</table>";
	mysqli_free_result($result);
	mysqli_close($link);
	?>
  
  </p><br />
      <img src="images/videoteca.jpg" alt="" width="262" height="193" />      <br />
      <br />
</div>
</div>

<div class="right"> 
<form action="validar.php" method="POST">

<ul>
  <li></li>
</ul>

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