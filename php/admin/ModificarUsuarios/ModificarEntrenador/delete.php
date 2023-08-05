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

$ID_entrenador=$_GET['id'];

$sql="DELETE FROM registroentrenador  WHERE ID_entrenador='$ID_entrenador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./FormularioEntrenador.php");
    }
   
?>
