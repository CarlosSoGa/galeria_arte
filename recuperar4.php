<?php
if(!empty($_POST)){
	if(isset($_POST["contraseña"])){
		if($_POST["contraseña"]!=""){
			$contraseña=$_POST["contraseña"];
            $host="localhost";
            $user="root";
            $password="";
            $db="galeria";
			$con = new mysqli($host,$user,$password,$db);
			$sql1= "update clientes set password='$contraseña' where id_cliente=\"$_POST[id]\"";
			$query = $con->query($sql1);
			if($query){
				print "<script>alert(\"Contraseña cambiada con éxito.\");window.location='index.php';</script>";
			}
			
            }
		}
	}