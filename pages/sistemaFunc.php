<?php
    session_start();
    include_once('../config/config.php');
    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: Login.php');
    }

    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sistema.css">
    <style>
        .box
        {
            position: absolute;
            top: 30%;
            left: 1%;
            padding: 15px;
            border-radius: 15px;
            width: 15%;
            color: white;
        }

        .box1
        {
            position: absolute;
            top: 30%;
            left: 40%;
            padding: 15px;
            border-radius: 15px;
            width: 24%;
            color: white;
        }

        .box2
        {
            position: absolute;
            top: 30%;
            left: 75%;
            padding: 15px;
            border-radius: 15px;
            width: 24%;
            color: white;
        }

        .box3
        {
            position: absolute;
            top: 10%;
            left: -2%;
            padding: 15px;
            border-radius: 15px;
            width: 15%;
            color: white;
        }

        .btn-lg
        {
            border-radius: 10px;
            outline: none;
        }
    </style>
    <title>Sistema</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="sistemaFunc.php">EMPRESA X</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="../config/sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>

    <br>

    <?php
        echo "<span style='color:white;'><h1>Bem vindo <u>$logado</u></h1></span>";
    ?>

    <div class="box">
        <a href="iniciarPonto.php"><button type="button" class="btn btn-success btn-lg">Inicar Ponto</button></a>
    </div>

    <div class="box1">
        <a href="almocoPonto.php"><button type="button" class="btn btn-success btn-lg">Almoço</button></a>
    </div>

    <div class="box2">
        <a href="saidaPonto.php"><button type="button" class="btn btn-success btn-lg">Terminar Ponto</button></a>
    </div>

    <div class="box3">
        <a href="justificar.php"><button type="button" class="btn btn-dark btn-lg">Justificativa</button></a>
    </div>
</body>
</html>