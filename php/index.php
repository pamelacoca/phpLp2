<?php
require_once("topo.php");
?>
<br><br>
    <h2>Sistema de Hospital</h2>
    <br>
    <?php
    if (isset($_SESSION['nomeUsuario'])) {
        //tipo = 1 - administrador (pode acessar tudo)
        //tipo = 2 - vendedor (acessa produtos, mas não exclui)
        //tipo = 3 - cliente (apenas lista produtos)
        echo "<p>Você está logado como " .
            $_SESSION['nomeUsuario'] . "</p><br>";
        if ($_SESSION['tipoUsuario'] == 1) {
            echo " <a href='medico/listarmedicos.php'>Medico</a>";
            echo " <a href='plano/listarplano.php'>Plano</a>";
            echo " <a href='especialidade/listarespecialidade.php'>Especialidade</a>";
        }
        
        if ($_SESSION['tipoUsuario'] == 2) {
            echo " <a href='planos/listarplanos.php'>Planos</a>";
        }
        if ($_SESSION['tipoUsuario'] == 3) {
            echo " <a href='planos/listarplanos.php'>Planos</a>";
        }
    } 
    echo " <a href='login.php'>Login</a>";
    
    ?>

    <br>
    
</body>

</html>