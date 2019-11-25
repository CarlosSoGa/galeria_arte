<?php session_start();
$usu=$_REQUEST['nombre'];
$pas=$_REQUEST['passwd'];
echo "Usuario: $usu <br>";
echo "Password: $pas <br>";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"galeria");
$result=mysqli_query($link,"select usuario, password, tipo from clientes where usuario='$usu'");
if ($row=mysqli_fetch_array($result))
{
	if ($row['password']==$pas) 
	{	
		$val=$row['tipo'];
		//echo "Si existe el Usuario: $usu y esta registrado <br>";
		$_SESSION["username"]=$usu;
		$_SESSION["tipo"]=$val;
		if ($val==1) header("Location:indexCliente.php");
		else
			header("Location:indexADM.php");
	}	
else
	echo "Password incorrecto <br>";
}

else
	echo "No existe el Cliente";
?>