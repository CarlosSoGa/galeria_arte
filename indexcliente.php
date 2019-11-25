<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Galería de Arte</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #003366}
-->
</style>
</head>
<body> 
	<?PHP 
		session_start();
	if(!isset($_SESSION['username']))
		header("Location:index.php");
	
	?>

<div id="wrap">

<div id="header">
<h1><a>Galería de Arte </a></h1>
<h2>Facultad de ciencias de la computación</h2>
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

<h2 class="Estilo1"><a>Bienvenido: <?PHP echo $_SESSION['username']; ?> </h2>
<div class="articles">
  <p>En esta seccion encontraras una gran variedad de obras de Arte con las que puedes interactuar. 
    Tambien puedes modificar tu <a href="rentaClientes.php" style="text-decoration: none"><strong>&quot;Perfil&quot; </strong></a></p>
  <p><strong><img src="images/videoteca.jpg" alt="" width="262" height="193" /></strong> <br />
      <br />
      <br />
    </p>
</div>
<div class="articles"></div>
</div>

<div class="right">
  <?php
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"galeria");
  $ranking=array();

  $result=mysqli_query($link,"select ranking from pelicula");
  while ($row= mysqli_fetch_array($result)) {
   $ra= $row["ranking"];
   array_push($ranking, $ra);
  }
  rsort($ranking);

  ?>
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>