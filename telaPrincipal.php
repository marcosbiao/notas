<!DOCTYPE html>
<html lang="pt">

<?php include("head.php"); ?>

    <body>
        
        <?php include("escolhedorCabecario.php"); ?>
        <?php 
            if($_SESSION['UsuarioNivel']==4){
                include("notasAluno.php");
            }
        
        
        ?>
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>