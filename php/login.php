<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="cadastre-se">
          <div class="convite-cadastro">
            <h1>Olá Amigo!</h1>
            <p>Se você não possui conta, cadastre-se agora e se junte a nossa jornada!</p>
            <a href="./cadastro.php">
            <button class="botao-cadastre-se">Cadastre-se</button>
            </a>
          </div>
        </div>  
        <!-- criar a div formularios -->
        <div class="container-formulario">
            <form method="post" action="validarlogin.php">
                <div class="cabecalho-formulario">
                    <h1>Login</h1>
                </div>
                <div class="grupo-input">
                    <div class="input-box">
                        <label for="">Email</label>
                        <input class="email required" type="email" name="email" placeholder="Digite seu email">
                    </div>

                    <div class="input-box">
                        <label for="">Senha</label>
                        <input class="nasc required" type="password" name="senha" placeholder="Digite sua senha">
                    </div>
                </div><br><br>
                <a href="">Esqueceu sua senha?</a><br>
                <a href="dashboard.php">
                    <button class="botao-logar">Logar</button>
                </a>
            </form>
        </div>
    </div>
    
</body>

</html>

