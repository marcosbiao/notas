    
    <?php 
    include("banco/banco.php");
    $id_aluno = ($_SESSION['UsuarioID']);
    $query = "Select AT.turma_id_turma, P.nome_professor,D.nome_disciplina,S.nome_semestre,AT.nota1,AT.nota2,AT.nota3,AT.nota4,AT.media from aluno_turma AT "
            . "join aluno A on (AT.aluno_id_aluno = A.id_aluno) "
            . "join turma T on (AT.turma_id_turma = T.id_turma) "
            . "join disciplina D on (T.disciplina_id_disciplina = D.id_disciplina) "
            . "join semestre S on (T.semestre_id_semestre = S.id_semestre) "
            . "join professor P on (T.professor_id_professor = P.id_professor) "
            . "where AT.aluno_id_aluno = $id_aluno order by AT.turma_semestre_id_semestre";
    //echo $query;
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>

    
        <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>  
            <th>Id</th>
            <th>Professor</th>
            <th>Disciplina</th>
            <th>Semestre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Media</th>    
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['turma_id_turma']."</td>" ;
              echo"<td>".$row['nome_professor']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ;
              echo"<td>".$row['nome_semestre']."</td>" ; 
              echo"<td>".$row['nota1']."</td>" ;
              echo"<td>".$row['nota2']."</td>" ;
              echo"<td>".$row['nota3']."</td>" ; 
              echo"<td>".$row['nota4']."</td>" ;
              echo"<td>".$row['media']."</td>" ; 
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';  
              echo"<td>".$row['turma_id_turma']."</td>" ;
              echo"<td>".$row['nome_professor']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ;
              echo"<td>".$row['nome_semestre']."</td>" ; 
              echo"<td>".$row['nota1']."</td>" ;
              echo"<td>".$row['nota2']."</td>" ;
              echo"<td>".$row['nota3']."</td>" ; 
              echo"<td>".$row['nota4']."</td>" ;
              echo"<td>".$row['media']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>

    ?>