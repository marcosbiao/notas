
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome_disciplina = trim($_POST["nome_disciplina"]);
        $cod_disciplina = trim($_POST["cod_disciplina"]);
        
        //$data2 = explode("-" or "/" or "." ,$data); 
        //$data = implode("",$data2);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO disciplina (nome_disciplina,cod,ativo) "
                . "VALUES ('$nome_disciplina','$cod_disciplina',1)";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>