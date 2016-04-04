
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
        if (!isset($_SESSION)) session_start();
        $id_turma = trim($_POST["id_turma"]);
        $_SESSION['id_turma'] =  $id_turma;
        
        ?>

<script>
    
    window.location = "telaCadastrarNotaForum.php"
    
</script>