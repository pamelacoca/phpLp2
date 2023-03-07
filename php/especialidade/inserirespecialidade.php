<?php
    require_once "../topo.php";
    if(!isset($_SESSION['usuarioLogado']) ||
        $_SESSION['usuarioLogado']==false){
        echo "<p>Você não tem permissão para
         executar esta página</p>";
} else {
    if ($_SESSION['tipoUsuario'] == 1) {
        if (
            isset($_POST['id']) && isset($_POST['nome'])
        ) {
            $var_id = $_POST['id'];
            $var_nome = $_POST['nome'];
            require_once "../conexao.php";
            try {
                //vamos inserir na tabela
                $sql = "insert into especialidades (nome)
                values ('$var_nome')";
                $query = $conexao->prepare($sql);
                $query->execute();
                $rs = $conexao->lastInsertId()
                    or die(print_r($query->errorInfo(), true));
                echo "<p>Salvo com sucesso!</p>";
            } catch (PDOException $i) {
                //se houver exceção, exibe
                die("Erro: <code>" . $i->getMessage() . "</code>");
            }
        } //fim do if
        else {
            echo "<h2>Preencha o <a href='cadespecialidade.php'>
        formulário</a></p>";
        }
    }else
        echo "<p>Você não tem permissão 
        para executar esta ação.</p>";
}//fim do else da SESSION
    require_once "../rodape.php";
    ?>
