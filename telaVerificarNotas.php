<html lang="pt">
    
    <?php include("head.php");  ?>
    
    <?php 
    $matricula_aluno = $_SESSION['UsuarioID'];
    include("banco/banco.php");
    $query = "Select AT.turma_id_turma, D.nome_disciplina, S.nome_semestre from aluno_turma AT  "
            . "join turma T on AT.turma_id_turma=T.id_turma  "
            . "join disciplina D on T.disciplina_id_disciplina = D.id_disciplina "
            . "join semestre S on T.semestre_id_semestre=S.id_semestre where AT.aluno_matricula_aluno = $matricula_aluno order by AT.turma_semestre_id_semestre";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    
    <body>
        <?php include("escolhedorCabecario.php"); ?>
        <h3>Consulta de disciplina</h3>
        
        <div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
   <!-- <p> ... </p>    -->
  </br></br>
        <form action = "telaEscolherTurma.php" method = "POST">
            <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">Selecione a turma</span>
                <select name="id_turma">
                    <option value="">--- Selecione ---</option>
                    <?php
                       echo "<option value=".$row['turma_id_turma'].">".$row['nome_disciplina']." ".$row['nome_semestre']. "</option>" ;
                       while($row = mysql_fetch_array($rs)){
                       echo "<option value=".$row['turma_id_turma'].">".$row['nome_disciplina']." ".$row['nome_semestre']. "</option>" ;
                    } ?>
                </select>
                </div>
            
                <div>
                    <input type="submit" id = "bm" class="btn btn-default topElementos" value="Selecionar" />
                </div>
        </form>

        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>