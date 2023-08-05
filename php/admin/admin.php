<?php

    session_start();

    if(!isset($_SESSION['rol'] )){
        header('location: ../../index.php');
        
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../../index.php');
        }
    }



	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../css/bootstrap/css/bootstrap-grid.css">
    <link rel="icon" type="image/png" href="../../img/LogoPagina.png" />
    <link rel="stylesheet" href="../../css/Style-login.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
   

    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
   <a class="navbar-brand" href="./admin.php">Gym</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="./RegistroUsuarios/Registrar.php">Crear Usuario</a>
          <a class="nav-link" aria-current="page" href="./ModificarUsuarios/ModificarUsuarios.php">Modificar usuario</a>
           <a class="nav-link" href="./verUsuarios/verUsuarios.php">Reportes alumnos</a>
         
          <a class="nav-link " href="./RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="./RegistrarMaquinas/FormularioMaquinaria.php">ver maquinaria </a>
          <a class="nav-link active" href="../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>
  </nav>

  
  <div class="card contenedor-pres">
  <img src="../../img/jefe." class="card-img-top img-pres">
  <div class="card-body">
    <h5 class="card-title">Administrador</h5>
    <p class="card-text">En este apartado podras crear usuarios ya sea entrenadores o alumnos, tambien se encargara de llevar el control de los pagos y de los inventarios de cada disciplina</p>
    
  </div>
</div>

</body>
</html>


