<?php
    // isset -> serve para saber se uma variável está definida
    
    include_once('config.php');
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $horaInicio = $_POST['horarioInicio'];
        $horaFim = $_POST['horarioFim'];
        $cargo = $_POST['cargo'];
        
        $sqlUpdate = "UPDATE funcionario SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',hora_inicio='$horaInicio',hora_fim='$horaFim',cargo='$cargo'
        WHERE id=$id";
        
        $result = $conexao->query($sqlUpdate);
    }
    
    header('Location: ../pages/sistema.php');
?>