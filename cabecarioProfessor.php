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
        
        <li role="presentation" class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar notas<span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
                 <li role="presentation"><a href="telaSelecionarTurmaForum.php">Cadastrar notas do forum</a></li>
            </ul>
        </li> 
        
        <li role="presentation"><a href="telaCadastrarTurmaProfessor.php">Cadastrar turma</a></li>
                
        <li role="presentation"><a href="logout.php">Sair</a></li>
      </ul>