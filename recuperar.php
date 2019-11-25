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
<h1><a href="#">Galería de Arte</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="consulta.php">Arte</a></li>
<li><a href="registro.php">Registro</a></li>
<li><a href="acerca.php">Acerca de</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2> Recuperación de contraseña </h2>
<div class="articles">
  
  	<form action="recuperar2.php" method="post" enctype="multipart/form-data">
		Nombre de Usuario: <br>
		<input type="text" name="usuario" required="">
		<br><br>
		<input type="submit" name="enviar" value="Enviar">

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
<h2>Login:</h2>
<ul>
<li><input type="text" name="nombre" size="15" required /></li>
</ul>

<h2>Password:</h2>
<ul>
<li><input type="password" name="passwd" size ="15" required /></li>
</ul>
<input type="submit" name="enviar" value="Acceder"/>
</form>
<form action="recuperar.php" method="POST">
<input type="submit" name="enviar" value="Recuperar"/>
</form>
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>