<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa ao sistema
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM funcionario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        
        
        $sql1 = "SELECT * FROM funcionario WHERE email = '$email' and senha = '$senha' and cargo = 'lider'";

        $result1 = $conexao->query($sql1);


        if (mysqli_num_rows($result) < 1) 
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            
            header('Location: ../pages/Login.php');
        }
        else
        {
            if (mysqli_num_rows($result1) < 1) 
            {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
    
                header('Location: ../pages/sistemaFunc.php');
            }
            else
            {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
    
                header('Location: ../pages/sistema.php');
            }  
        }
    }
    else {
        //Não Acessa
        header('Location: ../pages/Login.php');
    }
?>