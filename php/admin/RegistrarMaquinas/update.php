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

$Id_Maquina=$_POST['Id_Maquina'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$Estado=$_POST['Estado'];
$Fecha_Compra=$_POST['Fecha_Compra'];
$disciplina=$_POST['disciplina'];


$sql="UPDATE maquinas SET  Id_Maquina='$Id_Maquina',Nombre='$Nombre', Cantidad='$Cantidad',Estado='$Estado',Fecha_Compra='$Fecha_Compra ',disciplina='$disciplina ' WHERE Id_Maquina='$Id_Maquina'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: FormularioMaquinaria.php");
    }
?>