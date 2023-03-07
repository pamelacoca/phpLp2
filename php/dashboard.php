<?php
    require_once("topo.php");
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    .container {
        text-align: center;
    }
    </style>
</head>
    <body>
        <div class="container">              
                <?php
                if(isset($_SESSION['nomeUsuario'])){ 
                    echo "<h1>Esta é a dashboard</h1>";
                    echo "<p>Você tem permissão para acessar esta página</p>";  
                } else {
                     echo "<p>Você precisa estar logado para acessar esta função.</p>";
                }
                    ?>
                </div>
                </body>
            </html>
        

<?php
require_once("rodape.php");
?>