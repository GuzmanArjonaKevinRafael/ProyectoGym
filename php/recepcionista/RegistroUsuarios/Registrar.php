<?php 
session_start();

if(!isset($_SESSION['rol'])){
  header('location: ../../../index.php');
}else{
  if($_SESSION['rol'] != 3){
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
      <a class="navbar-brand" href="../recepcionista.php">Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="./Registrar.php">Ingresar alumno</a>
          <a class="nav-link" href="../RegistrarPagos/FormularioPagos.php">Pagos</a>
          <a class="nav-link active" href="../../login/logout.php">Cerrar Sesión</a> 
        </div>
      </div>
    </div>
  </nav>


    <main class="container">
        <!-- <h3>Registro de</h3> -->
        <br><br>
        <form method="POST" action="registros.php">
            <div class="container tamanioContenedor">
            <h1 class="" >Registro de Alumno</h1>
                <div class="row">
                    <div class="col-4 espacio">
                        <label for="exampleInputEmail1" class="form-label">Nombres</label>
                        <input type="text" name="Anombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                            required>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                        <input type="text" name="Aapellido" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z ]+"
                            required>
                    </div>

                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                        <input type="text" name="Atelefono" class="form-control" id="exampleInputPassword1"
                        pattern="[0-9 ]+" required>
                    </div>
                        
                        
                    <div class="col-6 espacio">
                        <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                        <input type="text" name="Acorreo" class="form-control" id="exampleInputPassword1" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$" >
                    </div>
                    <div class="col-6 espacio">
                        <label for="exampleInputPassword1" class="form-label">Disciplina</label>
                        <select class="form-select" name="disciplina" required>
                            <option >Seleccione:</option>
                            <option>Gym</option>
                            <option>Ballet</option>
                            <option>Artes marciales</option>
                        </select>
                    </div>
                    <div class="col-12 espacio">
                        <label for="exampleInputPassword1" class="form-label">Dirección</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Adireccion" pattern="[A-Za-z0-9 ]+" required></textarea>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputEmail1" class="form-label">Tutor</label>
                        <input type="text" name="Atutor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="[A-Za-z ]+"
                            required>
                    </div>
                    <div class="col-4 espacio">
                        <label for="exampleInputPassword1" class="form-label">Núm. emergencia</label>
                        <input type="num" name="Atelefono" class="form-control" id="exampleInputPassword1" pattern="[0-9 ]+" 
                            required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

       

      <div class="container" id="formulario" >

      </div>
    </main>

    <footer>
    </footer>

    <script src="../../..//js/FormulariosDinamicos.js"></script>
    <script src="../../../css/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
