<?php 


session_start();

if(!isset($_SESSION['rol'] )){
    header('location: ../../../index.php');
    
}else{
    if($_SESSION['rol'] != 1){
        header('location: ../../../index.php');
    }
}



 ?>
 
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema gimnasio</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.css">
    <link rel="icon" type="image/png" href="../../../img/LogoPagina.png" />
    <script src="../../../js/FormulariosDinamicos.js"></script>
    <link rel="stylesheet" href="../../../css/style.css">
  </head>
  <body>

    <header>

    </header>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../RegistroUsuarios/Registrar.php">Crear Usuario</a>
          <a class="nav-link" aria-current="page" href="../ModificarUsuarios/ModificarUsuarios.php">Modificar usuario</a>
          <a class="nav-link" href="../verUsuarios/verUsuarios.php">Reportes alumnos</a>
          <a class="nav-link" href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria </a>
          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>
  </nav>


    <main class="container">
        <!-- <h3>Registro de</h3> -->
        <br><br>
        <div class="row">
          <div class="col-4">
          <select id="lenguaje" class="form-select" onchange="formularios()">
          <option  default>Seleccione:</option>
          <option value="Recepcionista">Recepcionista</option>
          <option value="Entrenador">Entrenador</option>
          <option value="Alumno">Alumno</option>
            </select>
          </div>
      </div>

       

      <div class="container" id="formulario" >

      </div>
    </main>

    <footer>
    </footer>

    <script src="../../../js/FormulariosDinamicos.js"></script>
    <script src="../../../css/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
