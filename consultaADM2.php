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
  if($_SESSION['tipo']==1){
      header("Location:indexCliente.php");
      }
	
	?>

<div id="wrap">

<div id="header">
<h1><a href="#">Galeria de Arte</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
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

<h2>Consulta de Obras</h2>
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
		echo "Titulo: $ti <br>";
		echo "Director: $di <br>";
		echo "Actor: $ac <br>";
		echo "Sinopsis:<br> $de <br>";
	
	mysqli_free_result($result);
	mysqli_close($link);
	?></p>
<div class="articles">
<br />
    <br />
    <br />
      <br />
</div>
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>