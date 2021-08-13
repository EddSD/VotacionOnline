<?php 
function Conectar(){
	$link=mysqli_connect("localhost","root","");
	if (!$link){
		exit();
	}
	$con=mysqli_select_db($link, "proyectocuatri");
	if (!$con){
		exit();
	}
	return $link;
}

?>