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

$Id_Maquina=$_GET['id'];

$sql="DELETE FROM maquinas  WHERE Id_Maquina='$Id_Maquina'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: FormularioMaquinaria.php");
    }
?>
