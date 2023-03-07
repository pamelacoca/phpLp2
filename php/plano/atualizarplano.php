<?php
    require_once "../topo.php";
    if(!isset($_SESSION['usuarioLogado']) ||
        $_SESSION['usuarioLogado']==false){
        echo "<p>Você não tem permissão para
         executar esta página</p>";
    } else {
        if ($_SESSION['tipoUsuario'] == 1) {
            if(isset($_POST['id']) && isset($_POST['nome']) &&
            isset($_POST['cnpj']) && isset($_POST['operadora'])){
                $var_id = $_POST['id'];
                $var_nome = $_POST['nome']; 
                $var_email = $_POST['cnpj']; 
                $var_senha = $_POST['operadora']; 
                require_once "../conexao.php";
                try
                    {   
                        //vamos atualizar na tabela
                        $sql="update planos set nome='$var_nome',
                        cnpj='$var_cnpj',operadora='$var_operadora' 
                        where id=$var_id";
                        $query=$conexao->prepare($sql);
                        $query->execute();
                        echo "<p>Atualizado com sucesso!</p>";
                    }
                catch (PDOException $i)
                {
                    //se houver exceção, exibe
                    die("Erro: <code>" . $i->getMessage() . "</code>");
                }
            }//fim do if
            else {
                echo "<p>Preencha o <a href='cadplano.php'>
                formulário</a></p>";
            }
        }else
        echo "<p>Você não tem permissão 
        para executar esta ação.</p>";
    }//fim do else da SESSION
    require_once "../rodape.php";
?>
