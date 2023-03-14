<?php

session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion == "") {
    header("location:index.php");
    die();
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include('php/db.php');

    session_start();
    $usuario = $_SESSION['usuario']; 
    echo"Bienvenido " . $usuario;

    $consulta = "SELECT clave FROM usuarios WHERE usuario='$usuario'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_row($resultado);

    echo " " . $filas[0] . " ";
    

    ?>
    <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>

</html> 