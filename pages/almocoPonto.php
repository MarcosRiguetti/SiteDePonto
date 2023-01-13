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

    $logadoEmail = $_SESSION['email'];

    if (isset($_POST['submit']))
    {
        include_once('../config/config.php');

        date_default_timezone_set('America/Sao_Paulo');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $datahora = date("Y-m-d H:i:s");

        $result = mysqli_query($conexao, "INSERT INTO pontoalmoco(email,almoco) VALUES ('$email','$datahora')");

        header("Location: sistemaFunc.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto</title>
    <link rel="stylesheet" href="../css/ponto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" >
</head>
<body>
    <a class="btn btn-primary" href="sistemaFunc.php" role="button"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
    <div class="box">
        
        <form action="AlmocoPonto.php" method="POST">
            <fieldset>
                <legend class="title">Almoço</legend>
                
                <div class="inputBox">
                    <input type="hidden" name="email" value = "<?php echo $logadoEmail ?>">
                </div>
                
                <div class="inputBox">
                    <input type="submit" name="submit" id="submit"  value="CADASTRAR">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>