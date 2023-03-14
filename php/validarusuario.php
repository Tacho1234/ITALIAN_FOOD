<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){

    header("location:../home.php");


}else{

    header("location:../index.php");

}


?>