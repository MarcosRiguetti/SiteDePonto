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

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $texto = $_POST['texto'];
        $datahora = date("Y-m-d H:i:s");

        $result = mysqli_query($conexao, "INSERT INTO justificar(email,texto,data) VALUES ('$email','$texto', '$datahora')");

        header("Location: sistemaFunc.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justificar</title>
    <link rel="stylesheet" href="../css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" >
    <style>
        #texto
        {
            border: none;
            padding: 20px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
    </style>
    
</head>
<body>
    <a class="btn btn-primary" href="sistemaFunc.php" role="button"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
    <div class="box">
        
        <form action="justificar.php" method="POST">
            <fieldset>
                <legend class="title">Justicativas</legend>
                
                <div class="inputBox">
                    <input type="hidden" name="email" value = "<?php echo $logadoEmail ?>">
                </div>
                
                
                <div class="inputBox">
                    <label class="data" for="texto">Texto:</label>
                    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
                </div>
                

                <div class="inputBox">
                    <input type="submit" name="submit" id="submit"  value="CADASTRAR">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>