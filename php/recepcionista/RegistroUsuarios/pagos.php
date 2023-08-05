<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema gimnasio</title>
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.css">
    <link rel="icon" type="image/png" href="img/LogoPagina.png" />
    <script src="../../js/FormulariosDinamicos.js"></script>
  </head>
  <body>

    <header>

    </header>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../recepcionista.php">Gym</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
    </nav>

    <main>

    <div class="container contenedorPrincipal">
            <form action="">
              <input type="text">
              <button>Buscar</button>

              <select name="" id="">
              <option value="" default>Seleccione</option>
                <option value="">Disciplina</option>
                <option value="">Apellidos</option>
                <option value="">Nombre</option>
                <option value="">ID</option>
              </select>
            </form>

            <table class="table">
              <h1>Pagos</h1>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre alumno</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Correo electronico</th>
                  <th scope="col">Disciplina</th>
                  
                </tr>
              </thead>
      <?php
      include('../conexion.php');
      $query = mysqli_query($conexion,'SELECT * FROM registrosusuarios');
      $o = 5;
      while ($valores = mysqli_fetch_array($query)) {
      ?>
              <tbody>
                <tr>
                  <td><?php echo $valores['ID_registro'] ?></td>
                  <td><?php echo $valores['Nombres'] ?></td>
                  <td><?php echo $valores['Apellidos'] ?></td>
                  <td><?php echo $valores['CorreoElectronico'] ?></td>
                  <td><?php echo $valores['Disciplina'] ?></td>

                </tr>
              </tbody>

              <?php
                }
              ?>
            </table>
        </div>
        
    </main>

    <footer>
    </footer>

    <script src="../../js/FormulariosDinamicos.js"></script>
   
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>