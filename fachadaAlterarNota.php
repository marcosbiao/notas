
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
        if (!isset($_SESSION)) session_start();
        $id_turma = trim($_POST["id_turma"]);
        $matricula_aluno = trim($_POST["matricula_aluno"]);
        //echo $matricula_aluno;
        $qtd_ava_forum = trim($_POST["qtd_ava_forum"]);
        
        // chamando a função query da classe banco para adicionar ao banco de dados
        
        for($i=1;$i<=$qtd_ava_forum;$i++){
            $nota = $_POST["nota$i"];
            if($nota == NULL){
                //echo ' esta vazio '.$nota. ' ta vendo em '. $i;
                continue;
            }
            $b = "update ava_forum set ";
            $b = $b ." nota =  $nota where aluno_turma_turma_id_turma = $id_turma and aluno_turma_aluno_matricula_aluno = $matricula_aluno and id_ava_forum = $i" ;
            //echo $b;
            noQuery($b);
            $b = "";
            $query = "select sum(nota) as nota from ava_forum where aluno_turma_turma_id_turma = $id_turma and aluno_turma_aluno_matricula_aluno = $matricula_aluno";
            //echo $query;
            $rs = Select ($query);
            $row = mysql_fetch_array($rs);
            $media_forum = $row['nota']/$qtd_ava_forum;
            //echo $media_forum;
            $query = "update aluno_turma set med_forum = $media_forum where turma_id_turma = $id_turma and aluno_matricula_aluno = $matricula_aluno";
            noQuery($query);
        }
        
        $_SESSION['id_turma'] =  $id_turma;
    ?>


<script>
    
    window.location = "telaCadastrarNotaForum.php"
    
</script>