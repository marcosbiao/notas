<!DOCTYPE html>
<html lang="pt">
 <?php 
    include("banco/banco.php");
    $query = "Select * from professor";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolhedorCabecario.php");?>

      
      <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaExcluirProfessor.php" method="POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Excluir professor</h3>
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione o professor</span>
                                        <select name="id_professor">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row['id_professor'].">".$row['nome_professor']."</option>" ;
                                               while($row = mysql_fetch_array($rs)){
                                               echo "<option value=".$row['id_professor'].">".$row['nome_professor']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Excluir" />
                                        </div>
                                </div>
                        </form>
        </div>  
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
