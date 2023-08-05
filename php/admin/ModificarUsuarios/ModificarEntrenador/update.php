<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="gymmultidiciplinario";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}


$con=conectar();

$ID_entrenador =$_POST['ID_entrenador'];
$Nombres=$_POST['Nombres'];
$ApellidoP=$_POST['ApellidoP'];
$ApellidoM=$_POST['ApellidoM'];
$CorreoElectronico=$_POST['CorreoElectronico'];
$usuario=$_POST['usuario'];
$Contrasena=$_POST['Contrasena'];
$Edad=$_POST['Edad'];
$NumTelefono=$_POST['NumTelefono'];
$NumEmer=$_POST['NumEmer'];
$Direccion=$_POST['Direccion'];
$Disciplina=$_POST['Disciplina'];


$sql="UPDATE registroentrenador SET ID_entrenador='$ID_entrenador',Nombres='$Nombres',ApellidoP='$ApellidoP',ApellidoM='$ApellidoM',CorreoElectronico='$CorreoElectronico',usuario='$usuario',Contrasena='$Contrasena',Edad='$Edad',NumTelefono='$NumTelefono',NumEmer='$NumEmer',Direccion='$Direccion',Disciplina='$Disciplina' WHERE ID_entrenador='$ID_entrenador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./FormularioEntrenador.php");
    }
    
?>