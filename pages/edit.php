<?php
    include_once('../config/config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM funcionario WHERE id=$id";
        
        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $horaInicio = $user_data['hora_inicio'];
                $horaFim = $user_data['hora_fim'];
                $cargo = $user_data['cargo'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" >
    <title>Formulário</title>
</head>
<body>
    <a class="btn btn-primary" href="sistema.php" role="button"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
    <div class="box">
    <br><br><br><br><br><br><br><br><br><br><br>
        <form action="../config/saveEdit.php" method="POST">
            <fieldset>
                <legend class="title">Editar Funcionário</legend>
                
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                
                
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                
                
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>


                <div class="inputBox" id="genero">
                    <p>Sexo:</p>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ''?> required>
                    <label for="masculino">Masculino</label>
                </div>


                <div class="inputBoxGenro">
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ''?> required>
                    <label for="feminino">Feminino</label>
                </div>
                

                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc?>" required>
                </div>
                

                <div class="inputBox">
                    <label class="data" for="horarioInicio">Horario de Entrada:</label>
                    <input type="time" name="horarioInicio" id="data_nascimento" value="<?php echo $horaInicio?>" required>
                </div>

                
                <div class="inputBox">
                    <label class="data" for="horarioFim">Horario de Saida:</label>
                    <input type="time" name="horarioFim" id="data_nascimento" value="<?php echo $horaFim?>"  required>
                </div>
                

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputUser" value="<?php echo $cargo?>" required>
                    <label for="cargo" class="labelInput">Cargo</label>
                </div>

                <div class="inputBox">
                    <input type="hidden" name="id" value = "<?php echo $id ?>">
                    <input type="submit" name="update" id="update" value="SALVAR">
                </div>

            </fieldset>
        </form>
    </div>
</body>
</html> 