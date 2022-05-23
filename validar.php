<?php
session_start();//Iniciamos la sesión

include('conexion.php');/*Se incluye el archivo de la conexion para poder hacer nuestras consultas*/
$emausu=$_POST['emausu'];//Creamos la variable con el mismo nombre que se llamo en el formulario
$pasusu=$_POST['pasusu'];
$_SESSION['emausu'] = $emausu;//usamos la variable _SESSION que es igual a el dato que queramos mostrar

$sql="SELECT * FROM datos WHERE email='$emausu' and contraseña='$pasusu'";
$result=mysqli_query($con,$sql);//Variable que contiente la consulta y conexion a la BD

$count=mysqli_num_rows($result);//Recorremos que hay en las filas de la tabla
if ($count>0) {
 // 	$row=mysqli_fetch_array($result);
  header("location:sesion.php");//
  echo "WELCOME";
}
else{
	echo "Error en la autenticacion";
}
mysqli_free_result($result);