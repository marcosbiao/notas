<!DOCTYPE html>
<html lang="pt">

    <?php include("head.php"); ?>
    <?php 
        include("banco/banco.php");
        $query1 = "Select * from disciplina where ativo = 1 order by nome_disciplina";
        $rs1 = Select ($query1);
        $row1 = mysql_fetch_array($rs1);
    ?>
  <body>
    
    <?php include("escolhedorCabecario.php");?>
      
      <div class="container panel panel-default">
	</br></br>
        <h3><font color = "8B0000">ID da turma ou senha incorreta</font></h3>
        <h3>Informe o ID da turma e a senha</h3>
        <form action="fachadaAlunoDisciplina.php" method="POST">
            <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">ID</span>
                <input type="text" required="required" class="form-control"  id="id_turma" name="id_turma" placeholder="Digite o ID da turma" aria-describedby="sizing-addon2">
            </div>
            
            <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">Senha</span>
                <input type="text" required="required" class="form-control"  id="senha" name="senha" placeholder="Digite a senha da turma" aria-describedby="sizing-addon2">
            </div>
            
            <div>
                <input type="submit" id = "bm" class="btn btn-default topElementos" value="Cadastrar" />
            </div>
        </form>
      </div>
        
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
