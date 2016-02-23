<html lang="pt">
    <?php include("head.php");  ?>
    <?php 
    include("banco/banco.php");
    $query = "Select T.id_turma, D.nome_disciplina, S.nome_semestre from turmas T "
            . "join disciplina D on T.disciplina_id_disciplina = D.id_disciplina "
            . "join semestre S on T.semestre_id_semestre = S.id_semestre "
            . "where professor_id_professor=" .$_SESSION['UsuarioID']." order by semestre_id_semestre";
    //echo $query;
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    
    
    <body>
        <?php include("escolhedorCabecario.php"); ?>
        <h3>Consulta da turma</h3>
        
        <div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
   <!-- <p> ... </p>    -->
  </div>
  <!-- Table -->
  

        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>