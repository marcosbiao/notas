
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome_semestre = trim($_POST["nome_semestre"]);
        $id_semestre = trim($_POST["id_semestre"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "update semestre set nome_semestre = '$nome_semestre' where id_semestre = $id_semestre";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>