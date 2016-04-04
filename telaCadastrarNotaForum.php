<!DOCTYPE html>
<html lang="pt">

<?php include("head.php"); ?>

    <body>
        
        <?php include("escolhedorCabecario.php"); ?>
        <?php include("banco/banco.php");
        $id_turma = $_SESSION['id_turma'];
        //query para pegar informações gerais da turma
        $query = "Select A.nome_aluno, A.matricula_aluno from aluno_turma AT "
                . "inner join turma T on AT.turma_id_turma=T.id_turma "
                . "inner join aluno A on AT.aluno_matricula_aluno = A.matricula_aluno "
                . "where AT.turma_id_turma =" .$id_turma." order by A.nome_aluno ASC";
            //echo $query;
            $rs = Select ($query);
            //$row = mysql_fetch_array($rs);
        ?>
        
        
        <div> <h3>Cadastro de notas - Participação no Forum</h3>      
            <?php //echo $row['nome_disciplina']."  "; echo $row['nome_semestre']; ?> 
        </div>
        
        <div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
   <!-- <p> ... </p>    -->
  
  <!-- Table -->
  <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>
              <?php 
              //query para saber quantas notas de forum a disciplina tem.
              $query2 = "Select count(*) as qtd from ava_forum where aluno_turma_turma_id_turma = $id_turma group by `aluno_turma_aluno_matricula_aluno`";
              //echo $query2;
              $rs2 = Select ($query2);
              $row2 = mysql_fetch_array($rs2);
              $qtd_ava_forum = $row2['qtd'];
              ?>
              
              <th>Matricula</th>
              <th>Nome</th>
              <?php 
                //Colocar dinamicamente a quantidade de notas de forum
                for($i=1;$i<=$qtd_ava_forum;$i++){
                    echo "<th>Nota forum ".$i."</th>";
                }
              ?>
            <th>Salvar</th>
          </tr>
      </thead>
      <tbody>
          <?php
          while($row = mysql_fetch_array($rs)){ ?>
        <form action="fachadaAlterarNota.php" method="POST">
            <?php 
                echo "<input type='hidden' name='id_turma' value=".$id_turma.">";
                echo "<input type='hidden' name='qtd_ava_forum' value=".$qtd_ava_forum.">";
                echo "<input type='hidden' name='matricula_aluno' value=".$row['matricula_aluno'].">";
                echo"<td>".$row['matricula_aluno']."</td>" ;
                echo"<td>".$row['nome_aluno']."</td>" ;
                $query3 = "SELECT nota FROM `ava_forum` WHERE `aluno_turma_turma_id_turma` = $id_turma and `aluno_turma_aluno_matricula_aluno` = ".$row['matricula_aluno'];
                //echo $query3;
                $rs3 = Select ($query3);
                $i=1;
                while($row3 = mysql_fetch_array($rs3)){
                    echo"<td> <input type='text' id='nota".$i. "' name='nota".$i. "' size=3 value= ".$row3['nota']."> </td>" ;
                    $i++ ;
                }
                echo"<td> <input type='submit' id = 'bm' value='Salvar' /> </td>" ;
                echo "</tr>";
            ?>
        </form>
          <?php }?>
        
      </tbody>
  </table>
  </div>
  <form action="fachadaCalcularMedia.php" method="POST">
      <input type="hidden" name="id_turma" value=" <?php echo $id_turma; ?> ">
      <br><br><br>
      <div> 
          <center>
            <input type="submit" value="Calcular medias">
          </center>
      </div>
  </form>
        
        
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>