<?php
include 'conexion.php';
include 'configB.php';
$conexion = mysqli_query($mysqli, "SELECT ID_registro, Nombres FROM registrosusuarios");

// if(isset($_POST['estado']))
// {
//     $estado=$_POST['estado'];
//     echo $estado;
// }
?>

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


$id=$_GET['id'];

$sql="SELECT * FROM pagos WHERE IDpago='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema gimnasio</title>
  <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/LogoPagina.png" />
  <script src="./checkbox.js"></script>
  <link rel="stylesheet" href="../../css/style.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../admin.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../RegistroUsuarios/Registrar.php">Crear Usuario</a>
          <a class="nav-link" href="../verUsuarios/verUsuarios.php">Ver Usuarios</a>
          <a class="nav-link" href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria </a>
        </div>
      </div>
    </div>
  </nav>

  <body>

    <div class="container">

          <br>
          <h3>Actualizar de Pagos</h3>
          <form action="update.php" method="POST">
        
          <div class="row">
              <div class="col-4 espacio">
                    <label for="exampleInputEmail1">Fecha de pagos </label>
                    <input type="hidden" name="IDpago" value="<?php echo $row['IDpago']  ?>">
                    <input type="date" class="form-control mb-3" name="Fecha_pago" placeholder="Fecha de pago" value="<?php echo $row['Fecha_pago']  ?>">
                    
              </div>
              <div class="col-4 espacio">
                    <label for="exampleInputEmail1">Cantidad </label>
                    <input type="text" class="form-control mb-3" name="Cantidad" placeholder="cantidad" value="<?php echo $row['Cantidad']  ?>">
                   
              </div>

              <div class="col-4 espacio">
              <label for="exampleInputEmail1">Disciplina </label>
                    <input type="text" class="form-control mb-3" name="Disciplina" placeholder="Disciplina" value="<?php echo $row['Disciplina']  ?>">
                   
              </div>

              <div class="col-6 espacio">
                  <label for="exampleInputEmail1">Nombre </label>
                  <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre" value="<?php echo $row['Nombres']  ?>">
                   
              </div>

              <div class="col-6 espacio">
              <label for="exampleInputEmail1">Apellido </label>
                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellido" value="<?php echo $row['Apellidos']  ?>">
                   
              </div>

             


          </div>
                    
                    
                    
                    
                   
                  

                  <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                
        </form>
        </div>

    </div>

  </body>

</html>