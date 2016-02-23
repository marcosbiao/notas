
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_disciplina = trim($_POST["id_disciplina"]);
        $id_professor = trim($_POST["id_professor"]);
        $id_semestre = trim($_POST["id_semestre"]);
        $senha = trim($_POST["senha"]);
        
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO turmas (professor_id_professor,disciplina_id_disciplina,semestre_id_semestre,senha) "
                . "VALUES ($id_professor,$id_disciplina,$id_semestre,'$senha')";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>