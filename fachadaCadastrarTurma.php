
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_disciplina = trim($_POST["id_disciplina"]);
        $id_professor = trim($_POST["id_professor"]);
        $id_semestre = trim($_POST["id_semestre"]);
        $senha = trim($_POST["senha"]);
        $ava_forum = trim($_POST["ava_forum"]);
        $ava_presencial = trim($_POST["ava_presencial"]);
        
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO turma (professor_id_professor,disciplina_id_disciplina,semestre_id_semestre,senha,numero_ava_forum,numero_ava_presencial) "
                . "VALUES ($id_professor,$id_disciplina,$id_semestre,'$senha',$ava_forum,$ava_presencial)";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>