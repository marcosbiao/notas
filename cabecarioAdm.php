<center> <img src="imagem/seadUfrb.jpg" width="1300" height="300"> </center>
<br>
<?php if($_SESSION['UsuarioNivel'] != 1){
			session_destroy();
			header("Location: index.php");
			exit;
		  }
	?>
<ul class="nav nav-tabs">
        <!--Dropdown para bolsa estagio-->
        <li role="presentation"><a href="telaPrincipal.php">Home</a></li>
        
        <!--dropdown de professor -->
        
        <li role="presentation" class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
               Professor <span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
                 <li role="presentation"><a href="telaCadastrarProfessor.php">Cadastrar professor</a></li>
                <li role="presentation"><a href="telaConsultarProfessor.php">Consultar professor</a></li>
                <li role="presentation"><a href="telaAlterarProfessor.php">Alterar professor</a></li>
                <li role="presentation"><a href="telaExcluirProfessor.php">Excluir professor</a></li>
            </ul>
        </li>  
        
        <!--dropdown de disciplina -->
        
        <li role="presentation" class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
               Disciplina <span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
                <li role="presentation"><a href="telaCadastroBeneficiario.php">Cadastrar disciplina</a></li>
                <li role="presentation"><a href="telaConsultaBeneficiario.php">Consultar disciplina</a></li>
                <li role="presentation"><a href="telaSolicitarBolsaEstagio.php">Alterar disciplina</a></li>
                <li role="presentation"><a href="telaConsultarSolicitacaoBolsaEstagio.php">Excluir disciplina</a></li>
            </ul>
        </li> 
        
        <!--dropdown de semestre -->
        
        <li role="presentation" class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
               Semestre <span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
                <li role="presentation"><a href="telaCadastroBeneficiario.php">Cadastrar semestre</a></li>
                <li role="presentation"><a href="telaConsultaBeneficiario.php">Consultar semestre</a></li>
                <li role="presentation"><a href="telaSolicitarBolsaEstagio.php">Alterar semestre</a></li>
                <li role="presentation"><a href="telaConsultarSolicitacaoBolsaEstagio.php">Excluir semestre</a></li>
            </ul>
        </li> 
        
        <li role="presentation"><a href="logout.php">CRUD turma</a></li>
        
        <li role="presentation"><a href="logout.php">Sair</a></li>
      </ul>