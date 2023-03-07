
<?php
require_once("topo.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <style>
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include_once("conexao.php");

            $nome = filter_input(INPUT_POST, 'name');
            $nasc = filter_input(INPUT_POST, 'nasc');
            $cpf = filter_input(INPUT_POST, 'cpf');
            $celular = filter_input(INPUT_POST, 'fone');
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $endereco = filter_input(INPUT_POST, 'ende');
            $senha = filter_input(INPUT_POST, 'senhaConfirmada');

            echo "Nome: $nome <br>";
            echo "data de nascimento: $nasc <br>";
            echo "cpf: $cpf <br>";
            echo "celular: $celular <br>";
            echo "email: $email <br>";
            echo "endereco: $endereco <br>";
            echo "senha: $senha <br>";

            $result_usuarios = "insert into usuarios (nome, nasc, cpf, celular, email, endereco, senha) 
                VALUES ('$nome', '$nasc', '$cpf', '$celular', '$email', '$endereco', '$senha')";

            //executar a query
            $resultado_usuario = mysqli_query($conexao, $result_usuarios);

            //se não houver inserção de dados
            if (!$result_usuarios){
                echo "Erro na query: " . mysqli_error($conexao);
            }
        ?>
        <br><br>
<p>Ja com os dados cadastrado você pode clicar em login e acessar sua conta!</p>
    </div>

</body>
</html>


<?php
require_once("rodape.php");
?>