
    <?php

        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
        if (!isset($_SESSION)) session_start();
        $id_turma = trim($_POST["id_turma"]);
        $id_aluno = trim($_POST["id_aluno"]);
        $nota1 = trim($_POST["nota1"]);
        $nota2 = trim($_POST["nota2"]);
        $nota3 = trim($_POST["nota3"]);
        $nota4 = trim($_POST["nota4"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "update aluno_turma set nota1 = '$nota1', nota2 = '$nota2', nota3 = '$nota3', nota4 = '$nota4' where turma_id_turma = $id_turma and aluno_id_aluno =$id_aluno";
        //echo $b;
        noQuery($b);
        $_SESSION['id_turma'] =  $id_turma;
    ?>


<script>
    
    window.location = "telaCadastrarNotas.php"
    
</script>