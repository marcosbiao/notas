
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_semestre = trim($_POST["id_semestre"]);
        $nome_semestre = trim($_POST["nome_semestre"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "update semestre set ativo = 0 where id_semestre = $id_semestre";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>