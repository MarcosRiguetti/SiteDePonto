<?php

    if (isset($_POST['submit']))
    {
        include_once('../config/config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $horaInicio = $_POST['horarioInicio'];
        $horaFim = $_POST['horarioFim'];
        $cargo = $_POST['cargo'];

        $sql = "SELECT * FROM funcionario WHERE email = '$email'";

        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
            echo  "<script>alert('Cadastro realizado com sucesso!');</script>";

            $result = mysqli_query($conexao, "INSERT INTO funcionario(nome,senha,email,telefone,sexo,data_nasc,hora_inicio,hora_fim,cargo) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$horaInicio','$horaFim','$cargo')");

            header("Location: login.php");
        }
        else 
        {
            echo  "<script>alert('Esse email já existe!');</script>";

            $array = array($nome, $senha, $email, $telefone, $sexo, $data_nasc, $horaInicio, $horaFim, $cargo);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="../css/formulario.css">
    
</head>
<body>
    <div class="box">
        <br><br><br><br><br><br><br><br><br><br><br>
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend class="title">Cadastro de Funcionários</legend>
                
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>


                <div class="inputBox" id="genero">
                    <p>Sexo:</p>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Maculino</label>
                </div>


                <div class="inputBoxGenro">
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                </div>
                
                
                <div class="inputBox">
                    <label class="data" for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>

               
                <div class="inputBox">
                    <label class="data" for="horarioInicio">Horario de Entrada:</label>
                    <input type="time" name="horarioInicio" id="data_nascimento" required>
                </div>

                
                <div class="inputBox">
                    <label class="data" for="horarioFim">Horario de Saida:</label>
                    <input type="time" name="horarioFim" id="data_nascimento" required>
                </div>
                

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Cargo</label>
                </div>

                <input type="submit" name="submit" id="submit"  value="CADASTRAR">
            </fieldset>
        </form>
    </div>
</body>
</html>