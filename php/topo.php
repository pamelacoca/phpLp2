<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/style-topo.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- barra de navegação -->
        <ul>
            <li><a href="dashboard.php">Início</a></li>
            <li><a href="">Teste</a></li>
            <?php
            if (isset($_SESSION['carrinho']))
                    echo "<li><a href='/plano/listarplano.php'>Planos (".
                    $_SESSION['qtde'].")</a></li>";
                    //$_SESSION['carrinho'] . ")</a></li>";
            else
                echo "<li><a href='/plano/listarplano.php'>Planos</a></li>";        
                echo "<li style='float:right'>";
            if(isset( $_SESSION['nomeUsuario']))
                    echo "<a class='active' href='login.php'>".
                    $_SESSION['nomeUsuario']."</a></li>";
            else
                echo "<a class='active' href='login.php'>Login</a></li>";

            ?>
        </ul>
        <br><br>
    </body>
</html>