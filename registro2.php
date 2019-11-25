<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Galería de Arte</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href="#">Galeria de Arte</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="consulta.php">Arte</a></li>
<li><a href="registro.php">Registro</a></li>
<li><a href="acerca de.php">Acerca de</a></li>
</ul>
</div>


<div id="content">
<div class="left"> 

  <p>Tu usuario ha sido registrado con exito! No olvides tu usuario y contraseña. <strong></strong>

  <?php

        $cl=$_POST['cliente'];
        $ye=$_POST['year'];
        $us=$_POST['usuario'];
		$pa=$_POST['password'];
		$ra=$_POST['rank'];
	
	
	$link=mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "galeria");

	$result=mysqli_query($link,"INSERT INTO clientes (cliente, year, usuario, password, tipo) VALUES( '$cl', '$ye', '$us', '$pa', $ra )");

        $res=mysqli_query($link,"select * from  clientes");
     
	
	
?>
</p>
    <img src="images/videoteca.jpg" alt="" width="262" height="193" />      <br />
    <br />
    </p>
</div>


<div class="right"> 
<form action="validar.php" method="POST">
<h2>Login:</h2>
<ul>
<li><input type="text" name="nombre" size="15" required /></li>
</ul>

<h2>Password:</h2>
<ul>
<li><input type="password" name="passwd" size ="15" required /></li>
</ul>
<input type="submit" name="enviar" value="Acceder"/>
<input type="submit" name="enviar" value="Recuperar"/>
</form>
</div>
<div style="clear: both;"> </div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>


</body>
</html>