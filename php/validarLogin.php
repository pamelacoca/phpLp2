<?php
require_once("topo.php");
//verificar se digitou e-mail e senha
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //verificar se existe no banco de dados
    $sql = "SELECT * FROM usuarios
    where email='$email' and senha='$senha'";
    require_once("conexao.php");
    $resultado = $conexao->query($sql);
    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach ($dados as $linha) {
        //se existir, mensagem Ok
        echo "Acesso ok.";
        $_SESSION['usuarioLogado'] = true;
        $_SESSION['idUsuario'] = $linha['id'];
        $_SESSION['nomeUsuario'] = $linha['nome'];
        $_SESSION['tipoUsuario'] = $linha['tipo'];
        header("location:dashboard.php");
    } else {
        //se não existir, mensagem ERRO
        echo "Usuário ou senha inválidos.";
    }

}
require_once("rodape.php");

?>