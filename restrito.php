<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
    echo $_SESSION['UsuarioID'];exit;
    session_destroy();
  // Redireciona o visitante de volta pro login
  echo $_SESSION['UsuarioID'];exit;
  //header("Location: index.php"); exit;
}
?>

<h1>Página restrita</h1>
Olá, <?php echo $_SESSION['UsuarioNome'];
    echo $_SESSION['UsuarioNivel'] ?>!
<?php 
    header("Location: telaPrincipal.php");
?>