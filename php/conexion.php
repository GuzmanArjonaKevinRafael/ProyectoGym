<?php
$conexion = new mysqli("localhost", "root", "", "gymmultidiciplinario");
if(mysqli_connect_errno()){
    echo "no se puedo conectar";
}

?>