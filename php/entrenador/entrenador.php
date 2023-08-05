<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../../../index.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: ../../../index.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/Style-login.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="entrenador.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="./verUsuarios/verUsuarios.php">Alumnos</a>
          <a class="nav-link" href="./RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria</a>
          <a class="nav-link active" href="../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>
  </nav>

  <div class="card contenedor-pres">
  <img src="../../img/entrenador.png" class="card-img-top img-pres">
  <div class="card-body">
    <h5 class="card-title">Entrenador</h5>
    <p class="card-text">En este apartado consultaras a los alumnos y tambien lograras tener reporte de ellos</p>
    
  </div>
</div>

</body>
<link rel="stylesheet" href="../../css/bootstrap/js/bootstrap.bundle.js">
</html>