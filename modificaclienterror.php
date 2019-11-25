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

<h2> Cliente no encontrado. Intente denuevo</h2>
<div class="articles">
  <p>Busque el ID del cliente a modificar de la base de datos<br />

  	<form action="modificacliente2.php" method="post" enctype="" ="multipart/form-data">
		Id cliente: <br>
		<input type="text" name="id_cliente">
		<input type="submit" name="enviar" value="Aceptar">
		<br>
		<br>

	</form>
	<?php
	
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "galeria");

        $res=mysqli_query($link,"select * from clientes");
        echo "<table border=1>";
	echo "<TR><td> id_cliente</td> <td> cliente </td> <td> year </td><td> usuario </td><td> password </td><td> tipo </td></TR>";
	
	while($row = mysqli_fetch_array($res)){

		$id= $row["id_cliente"];
		$cl= $row["cliente"];
		$ye= $row["year"];
		$us= $row["usuario"];
		$pa= $row["password"];
		$ti= $row["tipo"];
		
		
		echo "<TR><td> $id </td> <td> $cl </td> <td> $ye </td><td> $us </td><td> $pa </td><td> $ti </td></TR>";
		}

	echo "</table>";
        
	
	
?>


<br />
</p>
    <img src="images/videoteca.jpg" alt="" width="262" height="193" />      <br />
    <br />
    </p>
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