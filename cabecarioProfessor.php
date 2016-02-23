<center> <img src="imagem/seadUfrb.jpg" width="1300" height="300"> </center>
<br>
<?php if($_SESSION['UsuarioNivel'] != 2){
			session_destroy();
			header("Location: index.php");
			exit;
		  }
	?>
<ul class="nav nav-tabs">
        <!--Dropdown para bolsa estagio-->
        <li role="presentation"><a href="telaPrincipal.php">Home</a></li>
        
        <li role="presentation"><a href="telaSelecionarTurma.php">Cadastrar notas</a></li>
        
        <li role="presentation"><a href="telaAlunoDisciplina.php">Cadastrar disciplina</a></li>
                
        <li role="presentation"><a href="logout.php">Sair</a></li>
      </ul>