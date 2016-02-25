<!DOCTYPE html>
<html lang="pt">

    <?php include("head.php"); ?>
    <?php 
        include("banco/banco.php");
        $query1 = "Select * from disciplina where ativo = 1 order by nome_disciplina";
        $rs1 = Select ($query1);
        $row1 = mysql_fetch_array($rs1);
    ?>
    <?php 
        $query2 = "Select * from professor where ativo = 1 and id_professor = ".$_SESSION['UsuarioID'];
        $rs2 = Select ($query2);
        $row2 = mysql_fetch_array($rs2);
    ?>
    <?php 
        $query3 = "Select * from semestre where ativo = 1 order by nome_semestre";
        $rs3 = Select ($query3);
        $row3 = mysql_fetch_array($rs3);
    ?>
  <body>
    
    <?php include("escolhedorCabecario.php");?>
      
      <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastrarTurma.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
                                        
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione o professor</span>
                                        <select name="id_professor">
                                            <?php
                                               echo "<option value=".$row2['id_professor'].">".$row2['nome_professor']."</option>" ;
                                            ?>
                                        </select>
                                        </div>
                                        
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione a disciplina</span>
                                        <select name="id_disciplina">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row1['id_disciplina'].">".$row1['nome_disciplina']."</option>" ;
                                               while($row1 = mysql_fetch_array($rs1)){
                                               echo "<option value=".$row1['id_disciplina'].">".$row1['nome_disciplina']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
                                        
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione o semestre</span>
                                        <select name="id_semestre">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row3['id_semestre'].">".$row3['nome_semestre']."</option>" ;
                                               while($row3 = mysql_fetch_array($rs3)){
                                               echo "<option value=".$row3['id_semestre'].">".$row3['nome_semestre']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Senha</span>
	  					<input type="text" required="required" class="form-control"  id="senha" name="senha" placeholder="Digite a senha da disciplina" aria-describedby="sizing-addon2">
					</div>
                                                                            
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Cadastrar" />
                                        </div>
                                </div>
                        </form>
        </div>
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
