
    <?php
        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // instanciando a classe do banco
        //$b = new database();
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $id_professor = trim($_POST["id_professor"]);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "delete from professor where id_professor='$id_professor'";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>