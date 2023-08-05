
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

echo $Nombre=$_POST['Nombre'];
echo $Cantidad	=$_POST['Cantidad'];
echo $Estado=$_POST['Estado'];
echo $Fecha_Compra=$_POST['Fecha_Compra'];
echo $disciplina=$_POST['disciplina'];


$sql = "INSERT INTO maquinas(Nombre, Cantidad, Estado, Fecha_Compra, disciplina) VALUES ('$Nombre','$Cantidad','$Estado','$Fecha_Compra','$disciplina')";
$query = mysqli_query($con,$sql);

if ($query) {
    echo"Registrado Correctamente";
} else {
    echo "no se pudo Registrar";
}

header('location: ./FormularioMaquinaria.php');


?>