<?php
$con=mysqli_connect('localhost','root','','registro');

	$con -> set_charset("utf8");

	/*if($con->connect_errno){
die("La conexion a fallado" . $con->connect_errno);
	}else{
    echo "conectado"; nos va indicar la conexion con exito
	} Esto es para validar la conexion solo funciona ya cuando vamos hacer una
	conexion con la BD en cual quier parte que se conecte nos va arrojar error similar_text
	Ay problemas de conexion*/

	