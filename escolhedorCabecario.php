       <?php  
    switch ($_SESSION['UsuarioNivel']){
        case 0://ainda sem função
            
            break;
        case 1://administrador geral do sistema
            include("cabecarioAdm.php");
            break;
        case 2://professor
            include("cabecarioProfessor.php");
            break;
        case 3://coordenador
            include("");
            break;
        case 4://aluno
            
            break;
        case 5:
            
            break;
        default :
            header("Location: index.php"); 
            exit;
    }
    ?>