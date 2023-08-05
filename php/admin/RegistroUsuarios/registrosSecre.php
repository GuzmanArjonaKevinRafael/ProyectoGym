<?php
include ('../../conexion.php');

$nombres = $_POST['Rnombres'];
$AapellidoP = $_POST['AapellidoP'];
$AapellidoM = $_POST['AapellidoM'];
$CorreoElectronico = $_POST['Rcorreo'];
$RSecre = $_POST['RSecre'];
$Contrasena = $_POST['Rcontrasena'];
$Edad = $_POST['Redad'];
$NumTel = $_POST['Rnumero'];
$EnumeroEmer = $_POST['RnumeroEmer'];
$Direccion = $_POST['Rdireccion'];

echo $nombres,"<br>",$AapellidoP,"<br>",$AapellidoM,"<br>",$CorreoElectronico,"<br>",$Contrasena,"<br>",$NumTel,"<br>",$Direccion,"<br>";

$consulta = "INSERT INTO registrosecretaria(Nombres, ApellidoP,ApellidoM, CorreoElectronico, usuario, Contrasena,Edad, NumTelefono,NumEmer, Direccion) VALUES ('$nombres','$AapellidoP','$AapellidoM','$CorreoElectronico', '$RSecre','$Contrasena','$Edad','$NumTel','$EnumeroEmer','$Direccion')";
$resultado = mysqli_query($conexion,$consulta);

$consulta2 = "INSERT INTO login(usuario, password, name) VALUES ('$RSecre', '$Contrasena', '$nombres')";
$resultado2 = mysqli_query($conexion,$consulta2);

if ($resultado && $resultado2) {
    echo"Registrado Correctamente";
} else {
    echo "no se pudo Registrar";
}

header('location: ./Registrar.php');

?>