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
<h1><a href="#">Galeria de arte</a></h1>
<h2>Facultad de Ciencias de la computaci�n </h2>
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
<?php
	$id=$_POST['id_cliente'];

	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "galeria");

	$resulta=mysqli_query($link,"SELECT * FROM clientes WHERE id_cliente = '$id' ");
	$resulta=mysqli_fetch_array($resulta);

	if($resulta["id_cliente"]== 0){
		header('Location:modificaclienterror.php');
	}

?>

<div id="content">
<div class="left"> 

<h2> Modifica Cliente </h2>
<div class="articles">
	<?php
	
	
	
	
	$result=mysqli_query($link,"select * from clientes where id_cliente=$id");
	$row= mysqli_fetch_array($result);
		$id= $row["id_cliente"];
		$cli= $row["cliente"];
		$ye= $row["year"];
		$ti= $row["tipo"];
		$pa= $row["password"];
		$us= $row["usuario"];

	?>
  
  	<form action="modificacliente3.php" method="post" enctype="" ="multipart/form-data">
		<input type="hidden" name="id_cliente" value="<?php echo "$id"; ?>">

		Cliente: <br>
		<input type="text" name="cliente" value="<?php echo "$cli"; ?>">
		<br><br>
		Año: <br>
		<input type="text" name="year" value="<?php echo "$ye"; ?>">
		<br><br>
		Contraseña: <br>
		<input type="text" name="password" value="<?php echo "$pa"; ?>">
		<br><br>
		Usuario: <br>
		<input type="text" name="usuario" value="<?php echo "$us"; ?>">
		<br><br>
		Tipo:
   <SELECT NAME="rank">
   <OPTION VALUE="1" SELECTED>Cliente
   <OPTION VALUE="0" >Administrador
   </select>
   <br><br>
		<input type="submit" name="enviar" value="Aceptar">
		<button type="cancel" onclick="window.location='modificacliente2.php';">Cancelar</button>

	</form>

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