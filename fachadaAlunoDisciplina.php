<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: index.php"); exit;
}?>
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
        $matricula_aluno = $_SESSION['UsuarioID'];
        
        $id_turma = trim($_POST["id_turma"]);
        $senha = trim($_POST["senha"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $query = "select * from turma where id_turma = $id_turma";
        $rs = Select ($query);
        $row = mysql_fetch_array($rs);
        
        //$id_turma = $row['turma_id_turma'];
        $id_professor = $row['professor_id_professor'];
        $id_disciplina = $row['disciplina_id_disciplina'];
        $id_semestre = $row['semestre_id_semestre'];
        $numero_ava_forum = $row['numero_ava_forum'];
        
        if($row['senha']==$senha){
            $b = "INSERT INTO aluno_turma (aluno_matricula_aluno,turma_id_turma,turma_professor_id_professor,turma_disciplina_id_disciplina,turma_semestre_id_semestre) "
            . "VALUES ($matricula_aluno,$id_turma,$id_professor,$id_disciplina,$id_semestre)";
            //echo $b;
            noQuery($b);
            for($i=1;$i <= $numero_ava_forum;$i++){
                $b ="INSERT INTO ava_forum (id_ava_forum,aluno_turma_turma_id_turma,aluno_turma_turma_semestre_id_semestre,aluno_turma_turma_professor_id_professor,aluno_turma_turma_disciplina_id_disciplina,aluno_turma_aluno_matricula_aluno)"
                        . "values($i,$id_turma,$id_semestre,$id_professor,$id_disciplina,$matricula_aluno)";
                noQuery($b);
            }
        }else{
            header("Location: telaAlunoDisciplinaErro.php");
        }
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>