<?php
require_once "../topo.php";
    if(!isset($_SESSION['usuarioLogado']) ||
        $_SESSION['usuarioLogado']==false){
        echo "<p>Você não tem permissão para
         executar esta página</p>";
    } else {
    if ($_SESSION['tipoUsuario'] == 1) {
        //pegar o id do registro a ser editado
        if (isset($_GET['id'])) {
            $var_id = $_GET['id'];
            try {
                //selecionar o registro a ser editado
                require_once "../conexao.php";
                $sql = "SELECT * from planos where id=$var_id";
                $resultado = $conexao->query($sql);
                $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dados as $linha) {
                    //mostrar o formulário com os dados do registro
?>
                        <!-- html -->
                        <div class="content">
                        <h3 id="titulo">Cadastro de Planos</h3>
                        <fieldset class="form">
                        <form name="form1" action="atualizarplano.php"
                        method="post">
                        <label for="id">id:<?php echo $linha['id']; ?></label>
                        <input type="hidden" name="id" 
                        value="<?php echo $linha['id']; ?>">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" required
                        value="<?php echo $linha['nome']; ?>"><br>
                        <label for="cnpj">CNPJ</label>
                        <input type="cnpj" name="cnpj" required
                        value="<?php echo $linha['cnpj']; ?>"><br>
                        <label for="operadora">Operadora</label>
                        <input type="operadora" name="operadora" required
                        value="<?php echo $linha['operadora']; ?>"><br>
                        
                    </fieldset>
                        <input class="botao" type="submit" value="Cadastrar">
                        </form>
                        </div>
                        <?php
                }
            } catch (Exception $erro) {
                die("Erro: <code>" . $erro->getMessage() . "</code>");
            }
        } else {
            echo "<p>Selecione um registro,
                clique <a href='listarplano.php'>aqui</a></p>";
        }
    }else
        echo "<p>Você não tem permissão 
        para executar esta ação.</p>";
}//fim do else da SESSION
require_once "../rodape.php";
?>
