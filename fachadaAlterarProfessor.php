
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_professor = trim($_POST["id_professor"]);
        $nome_professor = trim($_POST["nome_professor"]);
        $matricula_professor = trim($_POST["matricula_professor"]);
        $cpf_professor = trim($_POST["cpf_professor"]);
        echo $id_professor;
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "update professor set nome_professor = '$nome_professor', matricula_professor=$matricula_professor, cpf_professor = $cpf_professor where id_professor = $id_professor";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>