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

$ID_Funcionario=$_GET['id'];

$sql="DELETE FROM registrosecretaria  WHERE ID_Funcionario='$ID_Funcionario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./FormularioRecepcionista.php");
    }
    
?>
