<?php
include ('../../conexion.php');

$nombres = $_POST['Enombres'];
$EapellidoP = $_POST['EapellidoP'];
$EapellidoM = $_POST['EapellidoM'];
$CorreoElectronico = $_POST['Ecorreo'];
echo $Eentren = $_POST['Eentren'];
$Contrasena = $_POST['Econtrasena'];
$Edad = $_POST['Eedad'];
$NumTel = $_POST['Enumero'];
$EnumeroEmer = $_POST['EnumeroEmergencia'];
$Direccion = $_POST['Edireccion'];
$Disciplina = $_POST['Edisciplina'];

echo $nombres,"<br>","<br>",$CorreoElectronico,"<br>",$Contrasena,"<br>",$NumTel,"<br>",$Direccion,"<br>",$Disciplina,"<br>";

$consulta = "INSERT INTO registroentrenador(Nombres, ApellidoP,ApellidoM, CorreoElectronico, usuario,Contrasena,Edad, NumTelefono,NumEmer,Direccion,Disciplina) VALUES ('$nombres','$EapellidoP','$EapellidoM','$CorreoElectronico', '$Eentren', '$Contrasena','$Edad','$NumTel','$EnumeroEmer','$Direccion','$Disciplina')";
$resultado = mysqli_query($conexion,$consulta);

$consulta2 = "INSERT INTO login(usuario, password, name) VALUES ('$Eentren', '$Contrasena', '$nombres')";
$resultado2 = mysqli_query($conexion,$consulta2);

if ($resultado && $resultado2) {
    echo"Registrado Correctamente";
} else {
    echo "no se pudo Registrar";
}

header('location: ./Registrar.php');



?>