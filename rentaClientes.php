<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Galería de Arte</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
<!--
.Estilo3 {font-size: 16px}
-->
</style>
</head>
<body>
<?PHP 
		session_start();
	if(!isset($_SESSION['username']))
		header("Location:index.php");
	$user = $_SESSION['username'];
	?>

<div id="wrap">

<div id="header">
<h1><a href="#">Galeria de Arte</a></h1>
<h2>Facultad de Ciencias de la computación </h2>
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
<?php
  $link=mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "galeria");

  $res=mysqli_query($link,"select * from clientes where usuario='$user'");
  $row = mysqli_fetch_array($res);
  $id= $row["id_cliente"];
  $nombre = $row["cliente"];

  //obtener datos del perfil
  $res1=mysqli_query($link,"select * from perfil where id_cliente=$id");
   $row1 = mysqli_fetch_array($res1);
   $ocupacion = utf8_encode($row1["ocupacion"]);
   $info = $row1["descripcion"];

   //obtener las obras del cliente
   $res2=mysqli_query($link,"select * from pelicula where id_cliente=$id");
   $row2 = mysqli_fetch_array($res2);
   $url = $row2["imagen"];


?>

<div id="content">
<div class="left"> 

<br><br>
<div class="articles">
 


      <div class="profile">
        <div class="wrap">
          <div class="profile-main">
            <div class="profile-pic">
              <center><img src="images/profile.jpg" alt="Personal Profile" width=160 height=160>
              <h2><?php echo $nombre; ?></h2>
              <h3><?php echo $ocupacion; ?></h3>
            </div>
            <div class="mensaje">
              <br>
              <center><h5>Acerca del artista</h5></center>
              <center><p><?php echo $info; ?></p></center>
              <br>
              <center><h5>Obras Populares</h5></center>
              <center><img src="<?php echo "MisImagenes/".$url; ?>" alt="Personal Profile" width=100 height=100></center>
              


            </div>
          </center>
            
          </div>
        </div>
      </div>

  
    <img src="images/videoteca.jpg" alt="" width="262" height="193" />      <br />
    <br />
    </p>
</div>
</div>

<div class="right"> 
<button type="button">Modificar perfil</button>

<h2>&nbsp;</h2>
<ul>
<li></li>
</ul>
</div>
<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>