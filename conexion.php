<?php 

$server="localhost";
$bd="proyectocuatri";
$user="root";
$pwd="";

$conexion=mysqli_connect($server,$user,$pwd,$bd);

if (!$conexion) {
	die("Conexion fallida: " .mysqli_connect_error());
}


?>