<?php include("banco/banco.php");
echo 'tela professor';
session_start();
$matricula = $_SESSION['matricula'];
$senha = $_SESSION['senha'];
//session_destroy();
echo $matricula; echo $senha;
//    if (!empty($_POST) AND (empty($_POST['matricula']) OR empty($_POST['senha']))) {
//            echo 'vazio';
//            //header("Location: index.php");    
//            exit;
//        }
        echo 'depois do if';
            //echo $_POST['login'];
            //$senhamd5 = md5($senha);
        $sql = ("SELECT * FROM professor WHERE (matricula_professor = '". $matricula ."') AND (cpf_professor = '". $senha."') LIMIT 1;") or die(mysql_error());
        echo $sql;
        $query = Select($sql);
        if (mysql_num_rows($query) != 1) {
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
            echo "Login inválido!"; exit;
            //header("Location: index.php"); exit;
        } else {
            // Salva os dados encontados na variável $resultado
            echo 'quase certo';
            $resultado = mysql_fetch_assoc($query);
            //if (!isset($_SESSION)) session_start();
            // Salva os dados encontrados na sessão
            $_SESSION['UsuarioID'] = $resultado['id_professor'];
            $_SESSION['UsuarioLogin'] = $resultado['matricula_professor'];
            $_SESSION['UsuarioNivel'] = $resultado['nivel'];
            $_SESSION['UsuarioNome'] = $resultado['nome_professor'];
            // Redireciona o visitante
            echo $_SESSION['UsuarioID'];
            header("Location: restrito.php"); exit;
        }
        
          
    
    
?>