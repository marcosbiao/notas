
<?php include("banco/banco.php");
    
    
        if (!empty($_POST) AND (empty($_POST['matricula']) OR empty($_POST['senha']))) {
            header("Location: index.php");    
            exit;
        }

        $login = mysql_real_escape_string($_POST['matricula']);
        $senha = mysql_real_escape_string($_POST['senha']);
            echo $_POST['matricula'];
            echo $_POST['senha'];
        $sql = ("SELECT * FROM aluno WHERE (matricula_aluno = '". $_POST['matricula'] ."') AND (cpf_aluno = '". $_POST['senha']."') LIMIT 1;") or die(mysql_error());
            echo $sql;
        $query = Select($sql);
        if (mysql_num_rows($query) != 1) {
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
            echo "Login inválido! indo para tela professor";
            session_start();
            $_SESSION['matricula'] = $_POST['matricula'];
            $_SESSION['senha'] = $_POST['senha']; 
            header("Location: loginProfessor.php");
            exit;
        } else {
            // Salva os dados encontados na variável $resultado
            $resultado = mysql_fetch_assoc($query);
        }
        // Se a sessão não existir, inicia uma
          if (!isset($_SESSION)) session_start();
          // Salva os dados encontrados na sessão
          $_SESSION['UsuarioID'] = $resultado['matricula_aluno'];
          $_SESSION['UsuarioLogin'] = $resultado['matricula_aluno'];
          $_SESSION['UsuarioNivel'] = $resultado['nivel'];
          $_SESSION['UsuarioNome'] = $resultado['nome_aluno'];
          // Redireciona o visitante
          //echo "indo pra tela professor";
          header("Location: restrito.php"); exit;
?>
