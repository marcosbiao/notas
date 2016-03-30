    
    <?php 
    include("banco/banco.php");
    $id_professor = ($_SESSION['UsuarioID']);
    $query = "Select T.id_turma, D.nome_disciplina, S.nome_semestre, T.senha from turma T "
            . "join disciplina D on (T.disciplina_id_disciplina = D.id_disciplina)"
            . "join semestre S on (T.semestre_id_semestre = S.id_semestre) "
            . "where T.professor_id_professor = $id_professor order by T.semestre_id_semestre DESC";
    //echo $query;
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>

    
        <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>  
            <th>Id</th>
            <th>Disciplina</th>
            <th>Semestre</th>
            <th>Senha</th>  
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['id_turma']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ;
              echo"<td>".$row['nome_semestre']."</td>" ; 
              echo"<td>".$row['senha']."</td>" ;
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';  
              echo"<td>".$row['id_turma']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ;
              echo"<td>".$row['nome_semestre']."</td>" ; 
              echo"<td>".$row['senha']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>

    