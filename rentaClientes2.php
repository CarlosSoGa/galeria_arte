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
<h1><a href="#">Videoteca</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="indexcliente.php">Inicio</a></li>
<li><a href="consultaClientes.php">Consultar</a></li>
<li><a href="rentaClientes.php">Rentas</a></li>
<li><a href="salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2> Historial de rentas de peliculas </h2>
<div class="articles">
  <p>Este es tu listado de las peliculas que has rentado a lo largo de este tiempo <strong>&quot;Registro&quot; </strong><br />

  <?php
        $id=$_POST['id'];
        $cliente=$_POST['cliente'];
        $actual=$_POST['actual'];
        $entrega=$_POST['entrega'];

	
	
	$link=mysqli_connect("localhost", "root", "082000");
	mysqli_select_db($link, "videoteca");

	$result=mysqli_query($link,"INSERT INTO rentas (fecha_inicio, fecha_fin, id_cliente,id_pelicula) VALUES( '$actual', '$entrega', $cliente,$id )");

        $res=mysqli_query($link,"select * from rentas");
        echo "<table border=1>";
	echo "<TR><td> FECHA INICIO </td> <td> FECHA FIN </td> <td> ID CLIENTE  </td><td> ID PELICULA</td></TR>";
	
	while($row = mysqli_fetch_array($res)){

		$inicio= $row["fecha_inicio"];
		$fin= $row["fecha_fin"];
		$id_clien= $row["id_cliente"];
		$id_pel= $row["id_pelicula"];
		
		
		echo "<TR><td> $inicio </td> <td> $fin </td> <td> $id_clien </td><td> $id_pel </td></TR>";
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
<h2>Peliculas mas rentadas:</h2>
<p>&nbsp;</p>
<p>1.</p>
<p>2.</p>
<p>3. </p>
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