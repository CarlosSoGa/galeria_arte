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

<h2> Obra Modificada</h2>
<div class="articles">

  <?php
        $id=$_POST['id_pelicula'];
        $ti=$_POST['titulo'];
        $di=$_POST['director'];
        $ac=$_POST['actor'];
		$ar=$_POST['archivo'];
		$desc=$_POST['desc'];
		$ra=$_POST['rank'];

	
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "galeria");

	$result=mysqli_query($link,"UPDATE `pelicula` SET `titulo` = '$ti', `director` = '$di', `imagen` = '$ar', `descripcion` = '$desc', `actor` = '$ac', `ranking`= '$ra'WHERE `pelicula`.`id_pelicula` = '$id';");

        $res=mysqli_query($link,"select * from pelicula");
        echo "<table border=1>";
	echo "<TR><td> id_pelicula</td> <td> titulo </td> <td> director </td><td> actor </td><td> imagen </td><td> descripcion </td><td>Ranking</td></TR>";
	
	while($row = mysqli_fetch_array($res)){

		$id= $row["id_pelicula"];
		$ti= $row["titulo"];
		$di= $row["director"];
		$ac= $row["actor"];
		$ar= $row["imagen"];
		$desc= $row["descripcion"];
		$ra= $row["ranking"];
		
		
		echo "<TR><td> $id </td> <td> $ti </td> <td> $di </td><td> $ac </td><td> $ar </td><td> $desc </td><td>$ra</td></TR>";
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