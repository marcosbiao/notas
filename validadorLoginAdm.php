
<?php include("banco/banco.php");
        if (!empty($_POST) AND (empty($_POST['matricula']) OR empty($_POST['senha']))) {
            header("Location: index.php");    
            exit;
        }

        $login = mysql_real_escape_string($_POST['matricula']);
        $senha = mysql_real_escape_string($_POST['senha']);
            //echo $_POST['login'];
            //$senhamd5 = md5($senha);
        $sql = ("SELECT * FROM adm WHERE (login = '". $_POST['matricula'] ."') AND (senha = '". $_POST['senha']."') LIMIT 1;") or die(mysql_error());
        echo $sql;
        $query = Select($sql);
        if (mysql_num_rows($query) != 1) {
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
            //echo "Login inválido!"; exit;
        } else {
            // Salva os dados encontados na variável $resultado
            $resultado = mysql_fetch_assoc($query);
        }
        // Se a sessão não existir, inicia uma
          if (!isset($_SESSION)) session_start();
          // Salva os dados encontrados na sessão
          $_SESSION['UsuarioID'] = $resultado['id_adm'];
          $_SESSION['UsuarioLogin'] = $resultado['login'];
          $_SESSION['UsuarioNivel'] = $resultado['nivel'];
          $_SESSION['UsuarioNome'] = $resultado['nome'];
          // Redireciona o visitante
          header("Location: restrito.php"); exit;
    


?>
