<!DOCTYPE html>
<html lang="pt">

<?php include("head.html"); ?>

    <body>
        <center> <img src="imagem/seadUfrb.jpg" width="1300" height="300"> </center>
        <div class="container panel panel-default">
            <form action="validadorLogin.php" method="POST">
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
        <div class="container panel panel-default">
            Administrador, clique <a href="adm.php">aqui</a>
        </div>
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>