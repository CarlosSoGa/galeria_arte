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
<h1><a href="#">Videoteca</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="indexADM.php">Inicio</a></li>
<li><a href="consultaADM.php">Consultar</a></li>
<li><a href="alta.php">Alta</a></li>
<li><a href="baja.php">Baja</a></li>
<li><a href="modifica.php">Modificar</a></li>
<li><a href="salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2> Historial de rentas de peliculas </h2>
<div class="articles">
  <p>Este es tu listado de las peliculas que has rentado a lo largo de este tiempo <strong>&quot;Registro&quot; </strong><br />

  <?php

        $id=$_POST['id_cliente'];
        $cl=$_POST['cliente'];
        $ye=$_POST['year'];
        $us=$_POST['usuario'];
		$pa=$_POST['password'];
		$ti=$_POST['tipo'];
	
	
	$link=mysqli_connect("localhost", "root", "082000");
	mysqli_select_db($link, "videoteca");

	$result=mysqli_query($link,"INSERT INTO clientes (id_cliente, cliente, year, usuario, password, tipo) VALUES( $id, '$cl', '$ye', '$us', '$pa','$ti' )");

        $res=mysqli_query($link,"select * from  clientes");
        echo "<table border=1>";
	echo "<TR><td> id_clientes</td> <td> clientes </td> <td> year </td><td> usuario </td><td> password </td><td> tipo </td></TR>";
	
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