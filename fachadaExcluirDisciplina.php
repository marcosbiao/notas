
    <?php
        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_disciplina = trim($_POST["id_disciplina"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "update disciplina set ativo = 0 where id_disciplina = $id_disciplina";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>