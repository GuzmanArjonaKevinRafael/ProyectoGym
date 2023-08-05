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

$sql="SELECT * FROM registrosecretaria WHERE ID_Funcionario='$ID_Funcionario'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema gimnasio</title>
  <link rel="stylesheet" href="../../../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../../../img/LogoPagina.png" />
  <script src="./checkbox.js"></script>
  <link rel="stylesheet" href="../../../../css/style.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./FormularioAlumno.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          
          <a class="nav-link" href="../verUsuarios/verUsuarios.php">Modificar Alumnos</a>
          <a class="nav-link " href="../RegistrarPagos/FormularioPagos.php">Modificar Entrenador</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Modificar Recepcionista </a>
          <a class="nav-link active" href="../../../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>
  </nav>


  <body>

    <div class="container">

          <br>
          <h3>Actualizar Entrenador</h3>
          <form action="update.php" method="POST">
        
                    <input type="hidden" name="ID_entrenador" value="<?php echo $row['ID_Funcionario']  ?>">
                    
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?>" pattern="[A-Za-z ]+">
                  
                    <label for="exampleInputEmail1">Apellidos Paterno</label>
                    <input type="text" class="form-control mb-3" name="ApellidoP" placeholder="Apellido Paterno" value="<?php echo $row['ApellidoP']  ?>" pattern="[A-Za-z ]+">
                  
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" class="form-control mb-3" name="ApellidoM" placeholder="Apellido Materno" value="<?php echo $row['ApellidoM']  ?>" pattern="[A-Za-z ]+">
                  
                    <label for="exampleInputEmail1">CorreoElectronico</label>
                    <input type="text" class="form-control mb-3" name="CorreoElectronico" placeholder="Correo Electronico" value="<?php echo $row['CorreoElectronico']  ?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$">
                  
                    <label for="exampleInputEmail1">usuario</label>
                    <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>" pattern="[A-Za-z ]+">
                  
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="text" class="form-control mb-3" name="Contrasena" placeholder="Contraseña" value="<?php echo $row['Contrasena']  ?>"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                  
                    <label for="exampleInputEmail1">Edad</label>
                    <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad" value="<?php echo $row['Edad']  ?>" pattern="[0-9 ]+">

                    <label for="exampleInputEmail1">Numero de Telefono</label>
                    <input type="text" class="form-control mb-3" name="NumTelefono" placeholder="Numero de Telefono" value="<?php echo $row['NumTelefono']  ?>" pattern="[0-9 ]+">
                  
                    <label for="exampleInputEmail1">Numero de Emergencia</label>
                    <input type="text" class="form-control mb-3" name="NumEmer" placeholder="Numero de Emergencia" value="<?php echo $row['NumEmer']  ?>" pattern="[0-9 ]+">

                    <label for="exampleInputEmail1">Direccion</label>
                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>"  pattern="[A-Za-z0-9 ]+">
                  

              
                  <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                
        </form>
        </div>

    </div>

  </body>

</html>