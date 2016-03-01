<!DOCTYPE html>
<html lang="pt">
 <?php 
    include("banco/banco.php");
    $query = "Select * from semestre";
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
                        <form action = "fachadaAlterarSemestre.php" method="POST"">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Alterar dados de semestre</h3>
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione o semestre</span>
                                        <select name="id_semestre">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row['id_semestre'].">".$row['nome_semestre']."</option>" ;
                                               while($row = mysql_fetch_array($rs)){
                                               echo "<option value=".$row['id_semestre'].">".$row['nome_semestre']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Semestre</span>
	  					<input type="text" class="form-control"  id="nome_semestre" name="nome_semestre" placeholder="Digite o semestre" aria-describedby="sizing-addon2">
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
