<html lang="pt">
    <?php include("head.php");  ?>
    <?php 
    include("banco/banco.php");
    $query = "Select T.id_turma, D.nome_disciplina, S.nome_semestre from turma T "
            . "join disciplina D on T.disciplina_id_disciplina = D.id_disciplina "
            . "join semestre S on T.semestre_id_semestre = S.id_semestre "
            . "where professor_id_professor=" .$_SESSION['UsuarioID']." order by semestre_id_semestre DESC";
    //echo $query;
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    
    
    <body>
        <?php include("escolhedorCabecario.php"); ?>
        <h3>Consulta da turma</h3>
        
 
  <!-- Table -->
  <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaTrasnsicao.php" method="POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione a turma</span>
                                        <select name="id_turma">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row['id_turma'].">".$row['nome_disciplina']. " ".$row['nome_semestre'] ."</option>" ;
                                               while($row = mysql_fetch_array($rs)){
                                               echo "<option value=".$row['id_turma'].">".$row['nome_disciplina']. " ".$row['nome_semestre'] ."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Salvar" />
                                        </div>
                                </div>
                        </form>
        </div>
 

        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>