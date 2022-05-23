<?php
session_start();
error_reporting(0);// Quitar el error que dice variable de sesion no existe.
$varsesion = $_SESSION['emausu'];// creamos una variable para llamar la variable session
if($varsesion == null || $varsesion = ''){//Condicion para comprobar que hallan iniciado sesion
echo 'Usted no tiene autorizacion';
die();//es para que finalice aca la validacion y no ejecute mas codigo
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2><?php echo $_SESSION['emausu'] ?></h2><!--Mostrar el usario logueado-->
<a href="cerrarsesion.php">Cerrar sesion</a>
    WELCOME
</body>
</html>