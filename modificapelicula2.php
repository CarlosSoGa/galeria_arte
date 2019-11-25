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
	$id=$_POST['id_pelicula'];
	
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "galeria");

	$resulta=mysqli_query($link,"SELECT * FROM `pelicula` WHERE id_pelicula = '$id' ");
	$resulta=mysqli_fetch_array($resulta);

	if($resulta["id_pelicula"]== 0){
		header('Location:modificapeliculaerror.php');
	}

?>

<div id="content">
<div class="left"> 

<h2> Modifica Obras</h2>
<div class="articles">
	<?php
	
	$result=mysqli_query($link,"select * from pelicula where id_pelicula=$id");
	$row= mysqli_fetch_array($result);
		$id= $row["id_pelicula"];
		$ti= $row["titulo"];
		$di= $row["director"];
		$ac= $row["actor"];
		$im= $row["imagen"];
		$de= $row["descripcion"];

	?>
  
  	<form action="modificapelicula3.php" method="post" enctype="" ="multipart/form-data">
		<input type="hidden" name="id_pelicula" value="<?php echo "$id"; ?>">

		Titulo: <br>
		<input type="text" name="titulo" value="<?php echo "$ti"; ?>">
		<br><br>
		Director: <br>
		<input type="text" name="director" value="<?php echo "$di"; ?>">
		<br><br>
		Actor: <br>
		<input type="text" name="actor" value="<?php echo "$ac"; ?>">
		<br><br>
		Porcentaje de popularidad:
		<br>
   <SELECT NAME="rank">
   <OPTION VALUE="20" SELECTED>0%
   <OPTION VALUE="40" >25%
   <OPTION VALUE="60" >50%
   <OPTION VALUE="80" >75%
   <OPTION VALUE="99" >100%
   </select>
   <br><br>
		Selecciona la imagen de la obra:<br>
		<input type="file" name="archivo" value="hola.jpg" >
		<br><br>
		<textarea cols="30" rows="4" name="desc">
			<?php echo "$de"; ?>
		</textarea>
		<br><br>
		<input type="submit" name="enviar" value="Aceptar">

	</form>

<br />
</p>
    <img src="images/videoteca.jpg" alt="" width="262" height="193" />      <br />
    <br />
    </p>
</div>
</div>

<div class="right"> 

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