<?php
session_start();

if (!isset($_SESSION['rol'])) {
  header('location: ../../../index.php');
} else {
  if ($_SESSION['rol'] != 2) {
    header('../../../index.php');
  }
}

function conectar()
{
  $host = "localhost";
  $user = "root";
  $pass = "";

  $bd = "gymmultidiciplinario";

  $con = mysqli_connect($host, $user, $pass, $bd);

  mysqli_select_db($con, $bd);

  return $con;
}

$con = conectar();

$sql = "SELECT *  FROM maquinas";
$query = mysqli_query($con, $sql);
if (!isset($_SESSION['rol'])) {
  header('location: ../../../index.php');
} else {
  if ($_SESSION['rol'] != 2) {
    header('location: ../../../index.php');
  }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema gimnasio</title>
  <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../../img/LogoPagina.png" />
  <script src="./checkbox.js"></script>
  <link rel="stylesheet" href="../../../css/style.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../../../src/DataTables/DataTables-1.13.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../src/DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

  <script type="text/javascript" src="../../../src/DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="../../../src/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../../../src/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  </link>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../entrenador.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="../verUsuarios/verUsuarios.php">Alumnos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria</a>
          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>

  <body>
    <div class="container ">
      <div class="container">
        <h3 class="h3ce" style="text-align: center;">Inventario Maquinaria</h3>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover" id="table">
            <thead class="">
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Disciplina</th>
              </tr>
            </thead>

            <tbody class="table table-group-divider">
              <?php
              while ($row = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td class="table-ligth"><?php echo $row['Id_Maquina'] ?></td>
                  <td class="table-ligth"><?php echo $row['Nombre'] ?></td>
                  <td class="table-ligth"><?php echo $row['Cantidad'] ?></td>
                  <td class="table-ligth"><?php echo $row['Estado'] ?></td>
                  <td class="table-ligth"><?php echo $row['Fecha_Compra'] ?></td>
                  <td class="table-ligth"><?php echo $row['disciplina'] ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="../../../css/bootstrap/js/bootstrap.min.js"></script>
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