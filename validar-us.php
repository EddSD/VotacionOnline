<?php
//sesion votante
$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
session_start();
$_SESSION['user']=$usuario;

$conexion=mysqli_connect("localhost","root","","proyectocuatri");

$consulta="SELECT*FROM votantes where usuario='$usuario' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);


if ($query = mysqli_fetch_array($resultado)) {
    header("location: votos.php");
}

