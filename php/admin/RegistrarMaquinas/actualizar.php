
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
$id=$_GET['id'];

$sql="SELECT * FROM maquinas WHERE Id_Maquina='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema gimnasio</title>
  <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/LogoPagina.png" />
  <script src="./checkbox.js"></script>
  <link rel="stylesheet" href="../../css/style.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../admin.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../RegistroUsuarios/Registrar.php">Crear Usuario</a>
          <a class="nav-link" href="../verUsuarios/verUsuarios.php">Ver Usuarios</a>
          <a class="nav-link" href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria </a>
          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>
  </nav>


  <body>

    <div class="container">

          <br>
          <h3>Actualizar de Pagos</h3>
          <form action="update.php" method="POST">
        
                    <input type="hidden" name="Id_Maquina" value="<?php echo $row['Id_Maquina']  ?>" >
          <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Fecha de pago" value="<?php echo $row['Nombre']  ?>"  pattern="[A-Za-z0-9 ]+">
                    <label for="exampleInputEmail1">Cantidad </label>
                    <input type="text" class="form-control mb-3" name="Cantidad" placeholder="cantidad" value="<?php echo $row['Cantidad']  ?>" pattern="[0-9 ]+">
                    <label for="exampleInputEmail1">Estado </label>

                    <select name="Estado" value="<?php echo $row['disciplina']  ?>">
                  <option value="Funcional" >Funcional</option>
                  <option value="No funcional">No funcional</option>
                  <option value="Regular">Regular</option>
                </select>
                <br> <br>
                    <label for="exampleInputEmail1">Fecha de compra </label>
                    <input type="datetime " class="form-control mb-3" name="Fecha_Compra" placeholder="Fecha de compra" value="<?php echo $row['Fecha_Compra']  ?>" disabled>
                    <label for="exampleInputEmail1">Disciplina </label>
                   
                    <select name="disciplina" value="<?php echo $row['disciplina']  ?>">
                  <option value="Gym">Gym</option>
                  <option value="Ballet">Ballet</option>
                  <option value="Artes Marciales">Artes Marciales</option>
                </select>
                  <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                
        </form>
        </div>

    </div>

  </body>

</html>