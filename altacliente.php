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

<div id="content">
<div class="left"> 

<h2> Alta de cliente </h2>
<div class="articles">
  
  	<form action="altacliente2.php" method="post" enctype="" ="multipart/form-data">
		Id cliente: <br>
		<input type="text" name="id_cliente">
		<br><br>

		Cliente: <br>
		<input type="text" name="cliente">
		<br><br>
		Año: <br>
		<input type="text" name="year">
		<br><br>
		Contraseña: <br>
		<input type="text" name="password">
		<br><br>
		Usuario: <br>
		<input type="text" name="usuario">
		<br><br>
		Tipo:
   <SELECT NAME="rank">
   <OPTION VALUE="1" SELECTED>Cliente
   <OPTION VALUE="0" >Administrador
   </select>
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