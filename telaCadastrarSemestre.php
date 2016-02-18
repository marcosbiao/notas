<!DOCTYPE html>
<html lang="pt">

    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolhedorCabecario.php");?>
      
      <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastrarSemestre.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Semestre</span>
	  					<input type="text" required="required" class="form-control"  id="nome_semestre" name="nome_semestre" placeholder="Digite o semestre" aria-describedby="sizing-addon2">
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
