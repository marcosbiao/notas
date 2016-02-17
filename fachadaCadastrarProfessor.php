
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome_professor = trim($_POST["nome_professor"]);
        $matricula_professor = trim($_POST["matricula_professor"]);
        $cpf = trim($_POST["cpf"]);
        
        //$data2 = explode("-" or "/" or "." ,$data); 
        //$data = implode("",$data2);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO professor (nome_professor,matricula_professor,cpf_professor,nivel) "
                . "VALUES ('$nome_professor',$matricula_professor,$cpf,2)";
        echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>