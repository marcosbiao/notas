
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_turma = trim($_POST["id_turma"]);
        $senha = trim($_POST["senha"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $query = "select * from turma where id_turma = $id_turma";
        $rs = Select ($query);
        $row = mysql_fetch_array($rs);
        if($row['senha']==$senha){
            $b = "INSERT INTO aluno_turma (aluno_id_aluno,turma_id_turma,turma_professor_id_professor,turma_disciplina_id_disciplina,turma_semestre_id_semestre) "
            . "VALUES ('$nome_semestre',1)";
            //echo $b;
            noQuery($b);
        }
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>