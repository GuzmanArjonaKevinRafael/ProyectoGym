<?php
session_start();

if (!isset($_SESSION['rol'])) {
  header('location: ../../../index.php');
} else {
  if ($_SESSION['rol'] != 1) {
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
  if ($_SESSION['rol'] != 1) {
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
      <a class="navbar-brand" href="../admin.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

          <a class="nav-link" aria-current="page" href="../RegistroUsuarios/Registrar.php">Crear Usuario</a>
          <a class="nav-link" aria-current="page" href="../ModificarUsuarios/ModificarUsuarios.php">Modificar usuario</a>
          <a class="nav-link" href="../verUsuarios/verUsuarios.php">Reportes alumnos</a>
          <a class="nav-link" href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link" href="../RegistrarMaquinas/FormularioMaquinaria.php">Maquinaria </a>

          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>

  <body>



    <div class="container ">
      <div class="row">
        <div class="col-sm-6">
          <form action="insertar.php" method="post">

            <h3 class="h3ce">Registro de Maquinaria</h3>
            <div class="row">
              <div class="form-group col-sm-11 espacio">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required pattern="[A-Za-z0-9 ]+">
              </div>
              <br>
              <div class="form-group col-sm-6 espacio">
                <label for="exampleInputPassword1" class="form-label">Precio</label>
                <input type="text" name="Cantidad" class="form-control" id="exampleInputPassword1" required pattern="[0-9]+">
              </div>
              <br>
              <div class="col-sm-5 espacio">
                <label for="exampleInputEmail1" class="form-label">Estado </label>
                <select class="custom-select mr-sm-2 form-control " id="inlineFormCustomSelect" name="Estado" required>
                  <option selected>Seleccione</option>
                  <option value="Funcional" na>Funcional</option>
                  <option value="regular">Regular</option>
                  <option value="No Funcional">No Funcional</option>
                </select>

              </div>

              <div class="col-sm-5 espacio">
                <label for="exampleInputEmail1" class="form-label">Asignación</label>
                <select class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect" name="disciplina" required>
                  <option selected>Seleccione</option>
                  <option value="Gym">Gym</option>
                  <option value="Artes Marciales">Artes Marciales</option>
                  <option value="ballet">ballet</option>
                </select>
              </div>

              <div class="col-sm-5 espacio">
                <div class="form-group">
                  <label for="exampleInputPassword1" class="form-label">Fecha</label>
                  <input type="date" name="Fecha_Compra" class="form-control" id="exampleInputPassword1" required>
                </div>
              </div>

            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Enviar">
            <a class='btn btn-success' href='../../../src/reporte/maquinaria.php'>Imprimir Reporte</a>


          </form>
        </div>

        <div class="col-sm-6">
          <h3 class="h3ce">Registros</h3>
          <br>
          <div class="table-responsive text-nowrap">
            <table class="table table-hover" id="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Estado</th>
                  <th>Fecha</th>
                  <th>Disciplina</th>
                  <th>Opciones</th>
                </tr>
              </thead>

              <tbody>
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
                    <td class="table-ligth">
                      <a href="actualizar.php?id=<?php echo $row['Id_Maquina'] ?>" class="btn btn-warning">Editar</a>
                      <a href="delete.php?id=<?php echo $row['Id_Maquina'] ?>" class="btn btn-danger">Eliminar</a>

                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('#table').DataTable({
          ordering: false,
          info: false,
          searching: false,
          lengthMenu: [
            [5, 10],
            [5, 10]
          ],
          language: {
            url: '../../../src/DataTables/es-ES.json'
          },
        });
      });
    </script>
    <script src="../../../css/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>