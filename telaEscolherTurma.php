<!DOCTYPE html>
<html lang="pt">

<?php include("head.php"); ?>

    <body>
        
        <?php include("escolhedorCabecario.php"); ?>
        
            
    <?php 
    include("banco/banco.php");
    $id_turma = $_POST['id_turma'];
    $matricula_aluno = ($_SESSION['UsuarioID']);
    //query para dados gerais da turma
    $query = "Select AT.turma_id_turma, P.nome_professor,D.nome_disciplina,S.nome_semestre,AT.med_forum,AT.med_presencial,AT.media,AT.situacao,AT.nota_final,AT.media_final from aluno_turma AT "
            . "join aluno A on (AT.aluno_matricula_aluno = A.matricula_aluno) "
            . "join turma T on (AT.turma_id_turma = T.id_turma) "
            . "join disciplina D on (T.disciplina_id_disciplina = D.id_disciplina) "
            . "join semestre S on (T.semestre_id_semestre = S.id_semestre) "
            . "join professor P on (T.professor_id_professor = P.id_professor) "
            . "where AT.aluno_matricula_aluno = $matricula_aluno and AT.turma_id_turma = $id_turma "
            . "order by AT.turma_semestre_id_semestre";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php 
    //query para saber quantas notas de forum essa turma tem.
    $query2 = "Select count(*) as qtd from ava_forum where aluno_turma_aluno_matricula_aluno = $matricula_aluno and aluno_turma_turma_id_turma = $id_turma";
    $rs2 = Select ($query2);
    $row2 = mysql_fetch_array($rs2);
    $qtd_ava_forum = $row2['qtd'];
    ?>

        
        <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>  
            <th>Id</th>
            <th>Professor</th>
            <th>Disciplina</th>
            <th>Semestre</th>
            <?php 
                for($i=1;$i<=$qtd_ava_forum;$i++){
                    echo "<th>Nota forum ".$i."</th>";
                }
            ?>
            <th>Media Forum</th>
            <th>Media Presencial</th>
            <th>Media total</th>
            <th>Situação</th>
            <th>Nota Final</th>
            <th>Media Final</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['turma_id_turma']."</td>" ;
              echo"<td>".$row['nome_professor']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ;
              echo"<td>".$row['nome_semestre']."</td>" ;
              $query3 = "Select * from ava_forum where aluno_turma_aluno_matricula_aluno = $matricula_aluno and aluno_turma_turma_id_turma = $id_turma";
              $rs3 = Select ($query3);
              $row3 = mysql_fetch_array($rs3);
              echo "<td>".$row3['nota']."</td>" ;
               while($row3 = mysql_fetch_array($rs3)){
                    echo "<td>".$row3['nota']."</td>";
                }
              echo"<td>".$row['med_forum']."</td>" ;
              echo"<td>".$row['med_presencial']."</td>" ;
              echo"<td>".$row['media']."</td>" ; 
              echo"<td>".$row['situacao']."</td>" ;
              echo"<td>".$row['nota_final']."</td>" ; 
              echo"<td>".$row['media_final']."</td>" ; 
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';  
              echo"<td>".$row['turma_id_turma']."</td>" ;
              echo"<td>".$row['nome_professor']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ;
              echo"<td>".$row['nome_semestre']."</td>" ; 
              $query3 = "Select * from ava_forum where aluno_turma_aluno_matricula_aluno = $matricula_aluno and aluno_turma_turma_id_turma = $id_turma";
              $rs3 = Select ($query3);
              $row3 = mysql_fetch_array($rs3);
              echo "<td>".$row3['nota']."</td>" ;
               while($row3 = mysql_fetch_array($rs3)){
                    echo "<td>".$row3['nota']."</td>";
                }
              echo"<td>".$row['med_forum']."</td>" ;
              echo"<td>".$row['med_presencial']."</td>" ;
              echo"<td>".$row['media']."</td>" ; 
              echo"<td>".$row['situacao']."</td>" ;
              echo"<td>".$row['nota_final']."</td>" ; 
              echo"<td>".$row['media_final']."</td>" ; 
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
    
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>