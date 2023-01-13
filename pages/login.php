<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="bg">
    <div class="container">
        <form action="../config/testLogin.php" class="form" method="POST">
            <div class="card">
                <div class="cardTop">
                    <img src="./img/loginForm1.jpg" alt="" class="imgLogin"> 
                    <h2 class="title">SEJA BEM-VINDO!</h2>
                </div>
                
                <div class="cardUsuario">
                    <label>Usuario</label>
                    <input type="text" name="email" placeholder="👤" required>
                </div>

                <div class="cardSenha">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="🔒" required>
                </div>

                <div class="cardSubmit">
                    <input class="inputSubmit" type="submit" name="submit" value="Entrar">
                </div>
            </div>
        </form>
    </div>
</body>
</html>