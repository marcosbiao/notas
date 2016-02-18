
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_disciplina = trim($_POST["id_disciplina"]);
        $nome_disciplina = trim($_POST["nome_disciplina"]);
        $cod = trim($_POST["cod"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "update disciplina set cod = '$cod', nome_disciplina='$nome_disciplina' where id_disciplina = $id_disciplina";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>