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

<h2><?php
	$res=$_GET['id_pelicula'];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"galeria");

	$result=mysqli_query($link,"select * from pelicula where id_pelicula=$res");

	$row= mysqli_fetch_array($result);
		
		$ti= $row["titulo"];
		
		echo "Titulo: $ti <br>";
		
	mysqli_free_result($result);
	mysqli_close($link);
	?> </h2>
<div class="articles">
    <p>
	  <?php
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
		$dis = $row["disponibilidad"];

		if($dis == "1"){

			echo "<img src='MisImagenes/$im' width=250 height=250 /><br><hr>";
			echo "Titulo de la obra: $ti <br>";
			echo "Artista: $di <br>";
			echo "Lugar: $ac <br>";
			echo "Sinopsis:<br> $de <br>";
			echo "<h4>Precio: 5000$</h4> <br><br>";
			echo "<a href='comprarClientes.php?id_pelicula=$id'><input type='button' value='Comprar' style='float: right;'></a>";
			
		}
		else{
		echo "<img src='MisImagenes/$im' width=250 height=250 /><br><hr>";
		echo "Titulo de la obra: $ti <br>";
		echo "Artista: $di <br>";
		echo "Lugar: $ac <br>";
		echo "Sinopsis:<br> $de <br>";
		echo "<br><h4>Lo sentimos, la obra no se encuentra disponible por el momento</h4><br>";
		}
	
		echo "<a href='consultaClientes.php?id_pelicula=$id'><input type='button' value='Regresar' style='float: left;'></a>";
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