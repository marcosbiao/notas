<!DOCTYPE html>
<html lang="pt">

<?php include("head.html"); ?>

    <body>
        <center> <img src="imagem/seadUfrb.jpg" width="1300" height="300"> </center>
        <center> <h2>Login para administradores</h2> </center>
        <div class="container panel panel-default">
            <form action="validadorLoginAdm.php" method="POST">
                <center>
                    <div> 
                        <label>Login</label>
                        <input type="text" name="matricula" id="matricula">
                    </div>
                    <div>
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <div>
                        <input type="submit" value="Login">
                    </div>
                </center>
            </form>
        </div>
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>