
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome_semestre = trim($_POST["nome_semestre"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO semestre (nome_semestre,ativo) "
                . "VALUES ('$nome_semestre',1)";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>