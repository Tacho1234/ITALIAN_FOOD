<?php

$usuarionvo=$_POST['usuarionuevo'];
$clavenva=$_POST['clavenueva'];

include('db.php');

$consulta = "INSERT INTO usuarios (usuario,clave) VALUES ('$usuarionvo', '$clavenva')";
$resultado = mysqli_query($conexion, $consulta);

echo "Se ingreso el usuario con exito ";

header("location:../index.php");


?>