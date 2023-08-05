<?php 
session_start();

if(!isset($_SESSION['rol'])){
  header('location: ../../index.php');
}else{
  if($_SESSION['rol'] != 1){
      header('location: ../../index.php');
  }
}


 ?>



 
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema gimnasio</title>
  <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.css">

  <link rel="icon" type="image/png" href="../../../img/LogoPagina.png" />
  <link rel="stylesheet" href="../../../css/style.css">


  <link rel="stylesheet" href="../../../src/DataTables/DataTables-1.13.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../src/DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

  <script type="text/javascript" src="../../../src/DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="../../../src/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript"  src="../../../src/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></link>

  

</head>

<body>

  <header>

  </header>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../admin.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="../RegistroUsuarios/Registrar.php">Crear Usuario</a>
        <a class="nav-link" aria-current="page" href="../ModificarUsuarios/ModificarUsuarios.php">Modificar usuario</a>
        <a class="nav-link" href="./verUsuarios.php">Reportes alumnos</a>
          <a class="nav-link " href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">ver maquinaria </a>
          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>


      <?php
      
      
      if($_SESSION['rol'] == 1){
        echo `
        <a class="navbar-brand" href="#">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="../RegistroUsuarios/Registrar.php">Crear Usuario</a>
          <a class="nav-link active" href="../verUsuarios/verUsuarios.php">Ver Usuarios</a>
          <a class="nav-link" href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria </a>
          <a  class="nav-link not-active">Bienvenido</a>
          <a class="nav-link active" href="../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
        `;
      }
      if($_SESSION['rol'] == 2){
        echo `
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="../RegistroUsuarios/Registrar.php">Entrenador</a>
        </div>
      </div>
        `;
      }
      ?>
      
  
  </nav>

  

  <main>

    <div class="container contenedorPrincipal">
      <h1 class="h1Center">Alumnos Inscritos</h1>
      <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre alumno</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo electrónico</th>
            <th scope="col">Número de télefono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Disciplina</th>
            <th scope="col">Nombre tutor</th>
            <th scope="col">Número tutor</th>
        
          </tr>
        </thead>
        <tbody>
        <?php
        include('../../conexion.php');
        $query = mysqli_query($conexion, 'SELECT * FROM registrosusuarios');
        $o = 5;
        while ($valores = mysqli_fetch_array($query)) {

        ?>
          
            <tr>
              <td><?php echo $valores['ID_registro'] ?></td>
              <td><?php echo $valores['Nombres'] ?></td>
              <td><?php echo $valores['Apellidos'] ?></td>
              <td><?php echo $valores['CorreoElectronico'] ?></td>
              <td><?php echo $valores['NumTel'] ?></td>
              <td><?php echo $valores['Direccion'] ?></td>
              <td><?php echo $valores['Disciplina'] ?></td>
              <td><?php echo $valores['NombreTutor'] ?></td>
              <td><?php echo $valores['NumTutor'] ?></td>
             
      
                                       
           
            </tr>
          

        <?php
        }
        ?>
        </tbody>
      </table>
      <center><a class='btn btn-primary' href='../../../src/reporte/asistencias.php'>Imprimir Reporte</a></center>
    </div>

  </main>
<br><br>  
  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#">
            <img src="../../../img/logotipo-sleedw.svg" alt="Logo de SLee Dw">
          </a>
        </figure>
      </div>
      <div class="box">
        <h2>GYM</h2>
        <p>Sistema de administración de gimnasio ballet y artes marciales</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
      </div>
      <div class="box">
        <h2>SIGUENOS</h2>
        <div class="red-social">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>
      </div>
    </div>
    <div class="grupo-2">
      <small>&copy; 2021 <b>SLee Dw</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>


</body>
<script>
    $(document).ready(function() {
      $('#table').DataTable({
        ordering: false,
        info: false,
        language: {
            url: '../../../src/DataTables/es-ES.json'
        },
      });
    });
  </script>
</html>
