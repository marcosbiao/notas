<!DOCTYPE html>
<html lang="pt">
 <?php 
    include("banco/banco.php");
    $query = "Select * from disciplina";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
 <?php
 
 ?>
    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolhedorCabecario.php");?>
      
    <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaAlterarDisciplina.php" method="POST"">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Alterar dados de disciplina</h3>
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione a disciplina</span>
                                        <select name="id_disciplina">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row['id_disciplina'].">".$row['nome_disciplina']."</option>" ;
                                               while($row = mysql_fetch_array($rs)){
                                               echo "<option value=".$row['id_disciplina'].">".$row['nome_disciplina']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Codigo</span>
	  					<input type="text" class="form-control"  id="cod" name="cod" placeholder="Digite o codigo da disciplina" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome</span>
	  					<input type="text" class="form-control"  id="nome_disciplina" name="nome_disciplina" placeholder="Digite o nome da disciplina" aria-describedby="sizing-addon2">
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
