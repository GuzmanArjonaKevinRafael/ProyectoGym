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

$ID_registro=$_GET['id'];

$sql="DELETE FROM registrosusuarios  WHERE ID_registro='$ID_registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./FormularioAlumno.php");
    }
   
?>
