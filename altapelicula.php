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
	if(!isset($_SESSION['username'])){
		header("Location:index.php");

  }
	if($_SESSION['tipo']==1){
	    echo '<div id="wrap">

<div id="header">
<h1><a href="#">Galería de Arte</a></h1>
<h2>Facultad de Ciencias de la computaci�n </h2>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="indexADM.php">Inicio</a></li>
<li><a href="consultaClientes.php">Arte</a></li>
<li><a href="rentaClientes.php">Perfil</a></li>
<li><a href="altapelicula.php">Alta de Obra</a></li>
<li><a href="salir.php">Salir</a></li>

</ul>
</div>

<div id="content">
<div class="left"> 

<h2> Alta de Obras </h2>
<div class="articles">
  
    <form action="altapelicula2.php" method="post" enctype="" ="multipart/form-data">

    Titulo: <br>
    <input type="text" name="titulo">
    <br><br>
    Artista: <br>
    <input type="text" name="director" value = "'.$_SESSION['username'].'" readonly>
    <br><br>
    Lugar donde fue terminada la obra: <br>
    <input type="text" name="actor">
    <br><br>
    Clasificación: 
     <SELECT NAME="rank">
   <OPTION VALUE="20" SELECTED>Pintura
   <OPTION VALUE="40" >Fotografía
   <OPTION VALUE="60" >Audio
   <OPTION VALUE="80" >Video  
   <OPTION VALUE="99" >Escrito
   <OPTION VALUE="1" >Otro
   </select>
    <br><br>
      Estilo:
   <SELECT NAME="Clasi">
   <OPTION VALUE="0" SELECTED>Realismo
   <OPTION VALUE="1" >Abstracto
   <OPTION VALUE="2" >Moderno
   <OPTION VALUE="3" >Impresionista 
   <OPTION VALUE="4" >Expresionista
   <OPTION VALUE="5" >Hiperrealismo
   <OPTION VALUE="6">Surrealismo
   <OPTION VALUE="7" >Pop
   <OPTION VALUE="8" >Gotico
   <OPTION VALUE="9" >Cubismo 
   <OPTION VALUE="10" >Simbolismo
   <OPTION VALUE="11" >Figurativo
   <OPTION VALUE="12" >Naif
   <OPTION VALUE="13" >Retro  
   <OPTION VALUE="14" >Fauvismo
   <OPTION VALUE="15" >Puntillismo
   <OPTION VALUE="16">Romanticismo
   <OPTION VALUE="17" >Rococo
   <OPTION VALUE="18" >Victoriano
   <OPTION VALUE="19" >Clasicismo 
   <OPTION VALUE="20" >No clasificado
   </select>
   <br><br>
    Selecciona la imagen para la Obra <br>
    <input type="file" name="archivo">
    <br><br>
    <textarea cols="30" rows="4" name="desc">
      Describe tu obra
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
<form action="validar.php" method="POST">
<h2>Obras mas vistas:</h2>
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
</html>';
      }
	
	?>

<div id="wrap">

<div id="header">
<h1><a href="#">Galería de Arte</a></h1>
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

<h2> Alta de Obras </h2>
<div class="articles">
  
  	<form action="altapelicula2.php" method="post" enctype="" ="multipart/form-data">

		Titulo: <br>
		<input type="text" name="titulo">
		<br><br>
		Artista: <br>
		<input type="text" name="director">
		<br><br>
		Lugar donde fue terminada la obra: <br>
		<input type="text" name="actor">
		<br><br>
		Clasificación: 
		 <SELECT NAME="rank">
   <OPTION VALUE="20" SELECTED>Pintura
   <OPTION VALUE="40" >Fotografía
   <OPTION VALUE="60" >Audio
   <OPTION VALUE="80" >Video	
   <OPTION VALUE="99" >Escrito
   <OPTION VALUE="1" >Otro
   </select>
		<br><br>
			Estilo:
   <SELECT NAME="Clasi">
   <OPTION VALUE="0" SELECTED>Realismo
   <OPTION VALUE="1" >Abstracto
   <OPTION VALUE="2" >Moderno
   <OPTION VALUE="3" >Impresionista	
   <OPTION VALUE="4" >Expresionista
   <OPTION VALUE="5" >Hiperrealismo
   <OPTION VALUE="6">Surrealismo
   <OPTION VALUE="7" >Pop
   <OPTION VALUE="8" >Gotico
   <OPTION VALUE="9" >Cubismo	
   <OPTION VALUE="10" >Simbolismo
   <OPTION VALUE="11" >Figurativo
   <OPTION VALUE="12" >Naif
   <OPTION VALUE="13" >Retro	
   <OPTION VALUE="14" >Fauvismo
   <OPTION VALUE="15" >Puntillismo
   <OPTION VALUE="16">Romanticismo
   <OPTION VALUE="17" >Rococo
   <OPTION VALUE="18" >Victoriano
   <OPTION VALUE="19" >Clasicismo	
   <OPTION VALUE="20" >No clasificado
   </select>
   <br><br>
		Selecciona la imagen para la Obra <br>
		<input type="file" name="archivo">
		<br><br>
		<textarea cols="30" rows="4" name="desc">
			Describe tu obra
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
<form action="validar.php" method="POST">
<h2>Obras mas vistas:</h2>
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