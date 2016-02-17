<!DOCTYPE html>
<html lang="pt">

    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolhedorCabecario.php");?>
      
      <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastrarProfessor.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome do professor</span>
	  					<input type="text" required="required" class="form-control"  id="nome_professor" name="nome_professor" placeholder="Digite o nome do professor" aria-describedby="sizing-addon2">
					</div>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Matricula</span>
	  					<input type="text" required="required" class="form-control"  id="matricula_professor" name="matricula_professor" placeholder="Digite a matricula do professor" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">cpf</span>
                                                <input type="text" required="required" class="form-control"  id="cpf" name="cpf" placeholder="Digite o cpf, somente numeros" pattern="\d{11}\" aria-describedby="sizing-addon2">
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
