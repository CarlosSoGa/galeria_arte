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
<li><a href="consultaClientes.php">Arte</a></li>
<li><a href="RentasCliente.php">Rentas</a></li>
<li><a href="salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Arte</h2>
<div class="articles">En esta pagina encontraras las obras de mayor exito a nivel internacional, donde podras realizar compra de arte para lo cual te invitamos a que te registres en la sección de <strong>&quot;Registro&quot; </strong><br />
    <br />
      <img src="images/videoteca.jpg" alt="" width="262" height="193" />      <br />
      <br />
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