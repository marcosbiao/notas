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
        $id_aluno = $_SESSION['UsuarioID'];
        
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
        
        if($row['senha']==$senha){
            $b = "INSERT INTO aluno_turma (aluno_id_aluno,turma_id_turma,turma_professor_id_professor,turma_disciplina_id_disciplina,turma_semestre_id_semestre) "
            . "VALUES ($id_aluno,$id_turma,$id_professor,$id_disciplina,$id_semestre)";
            echo $b;
            noQuery($b);
        }else{
            header("Location: telaAlunoDisciplinaErro.php");
        }
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>