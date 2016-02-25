
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
        if (!isset($_SESSION)) session_start();
        $id_turma = trim($_POST["id_turma"]);
        $_SESSION['id_turma'] = $id_turma;
        // chamando a função query da classe banco para adicionar ao banco de dados
        $query = "Select * from aluno_turma where turma_id_turma = $id_turma";
        $rs = Select ($query);
        $row = mysql_fetch_array($rs);
        
        $media = ($row['nota1']+$row['nota2']+$row['nota3']+$row['nota4'])/4;
        $b = "update aluno_turma set media = $media where turma_id_turma = $id_turma and aluno_id_aluno = ".$row['aluno_id_aluno'];
        //echo $b;
        noQuery($b);
        while($row = mysql_fetch_array($rs)){
            $media = ($row['nota1']+$row['nota2']+$row['nota3']+$row['nota4'])/4;
            $b = "update aluno_turma set media = $media where turma_id_turma = $id_turma and aluno_id_aluno = ".$row['aluno_id_aluno'];
            //echo $b;
            noQuery($b);
        }
    ?>


<script>
    
    window.location = "telaCadastrarNotas.php"
    
</script>