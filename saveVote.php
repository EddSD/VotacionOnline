<?php  

require('conexion.php');

$idV=$_POST['voterID'];
$idCand=$_POST['id_Candidato'];

$consulta3="SELECT * FROM votos WHERE id_votante='$idV'";
$query=mysqli_query($conexion,$consulta3);

if (mysqli_num_rows($query)==1) {
  header("Location: votoNo.html");
}
else{



$consulta2="SELECT * FROM candidatos WHERE id='$idCand'";
$resultado=mysqli_query($conexion, $consulta2);

while ($fila=$resultado->fetch_array()) {
 $id=$fila["id"];
 $nomCand=$fila["nombre"];
 //$fila["carrera"];
 //$fila["cuatri"];
 $num_votos=$fila["num_votos"];
}

$consulta="INSERT INTO `votos`(`id_votante`, `seleccion`) VALUES ('$idV','$nomCand')";
mysqli_query($conexion, $consulta);

$voto_final=$num_votos+1;
$mod="UPDATE candidatos SET num_votos='".$voto_final."' WHERE id='$id'";
mysqli_query($conexion,$mod);
$conexion->close();
header("Location: votoSi.html");
}

?>