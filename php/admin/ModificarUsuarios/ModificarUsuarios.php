<?php

session_start();

if (!isset($_SESSION['rol'])) {
  header('location: ../../index.php');
} else {
  if ($_SESSION['rol'] != 1) {
    header('location: ../../index.php');
  }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" href="../../../css/modificar.css">
  <link rel="icon" type="image/png" href="../../../img/LogoPagina.png" />
  <link rel="stylesheet" href="../../../css/Style-login.css">
  <link rel="stylesheet" href="../../../css/style.css">
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
          <a class="nav-link" href="../admin.php">Inicio</a>
          <a class="nav-link" href="./ModificarAlumnos/FormularioAlumno.php">Modificar Alumnos</a>
          <a class="nav-link " href="./ModificarEntrenador/FormularioEntrenador.php">Modificar Entrenador</a>
          <a class="nav-link" href="./ModificarRecepcionista/FormularioRecepcionista.php">Modificar Recepcionista </a>
         

          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>



  <div class="row contendor-Principal">

    <div class="card contenedor-modif col-sm-4">
      <img src="../../../img/alumno.png" class="card-img-top img-modif">
      <div class="card-body">
        <h5 class="card-title">Modificar Alumnos</h5>
        <p class="card-text">En este apartado modificaras a todos los alumnos</p>
        <center><a href="./ModificarAlumnos/FormularioAlumno.php" class="btn btn-primary">Modificar</a></center>
      </div>
    </div>




    <div class="card contenedor-modif col-sm-4">
      <img src="../../../img/entrenador.png" class="card-img-top img-modif">
      <div class="card-body">
        <h5 class="card-title">Modificar Entrenador</h5>
        <p class="card-text">En este apartado modificaras a todos los entrenador.</p>
        <center><a href="./ModificarEntrenador/FormularioEntrenador.php" class="btn btn-primary">Modificar</a></center>
      </div>
    </div>



    <div class="card contenedor-modif col-sm-4">
      <img src="../../../img/recepcionista.png" class="card-img-top img-modifRe">
      <div class="card-body margin-img">
        <h5 class="card-title top-recepcionista">Modificar Recepcionista </h5>
        <p class="card-text">En este apartado modificaras a todos los recepcionistas </p>
        
        <center><a href="./ModificarRecepcionista/FormularioRecepcionista.php" class="btn btn-primary">Modificar</a></center>

      </div>
    </div>



</body>

</html>