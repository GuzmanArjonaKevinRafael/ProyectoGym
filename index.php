<?php
include_once './php/login/database.php';

session_start();

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: ./php/admin/admin.php');
            break;

        case 2:
            header('location: ./php/entrenador/entrenador.php');
            break;

        case 3:
            header('location: ./php/recepcionista/recepcionista.php');
            break;



        default:
    }
}



if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);

    if ($row == true) {
        $rol = $row[3];

        $_SESSION['rol'] = $rol;
        switch ($rol) {
            case 1:

                header("location: ./php/admin/admin.php?username=" . $_POST['username']);

                break;

            case 2:
                header('location: ./php/entrenador/entrenador.php');
                break;

            case 3:
                header('location: ./php/recepcionista/recepcionista.php');
                break;

            default:
        }
    } else {
        
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/signin.css">
    <link rel="stylesheet" href="./css/Style-login.css">
    <link rel="icon" type="image/png" href="./img/LogoPagina.png" />
    <link rel="stylesheet" href="css/style.css">


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="POST">
            <img class="mb-4 Img-Logo-login" src="img/fondito.jpg" alt="" width="100%" >
            <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
        </form>
    </main>
</body>

</html>