<html lang="pt">
    <?php include("head.php");  ?>
    <?php
    $id_turma = $_SESSION['id_turma'];
    include("banco/banco.php");
    $query = "Select AT.nota1, AT.nota2, AT.nota3, AT.nota4, AT.media, A.nome_aluno, A.matricula_aluno, A.id_aluno,D.nome_disciplina, S.nome_semestre from aluno A "
            . "join aluno_turma AT on A.id_aluno=AT.aluno_id_aluno "
            . "join turmas T on AT.turma_id_turma=T.id_turma "
            . "join disciplina D on T.disciplina_id_disciplina=D.id_disciplina "
            . "join semestre S on T.semestre_id_semestre=S.id_semestre "
            . "where AT.turma_id_turma =" .$id_turma." order by semestre_id_semestre DESC";
    //echo $query;
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    
    
    <body>
        <?php include("escolhedorCabecario.php"); ?>
        <div> <h3>Cadastro de notas</h3>      <?php echo $row['nome_disciplina']."  "; echo $row['nome_semestre']; ?> </div>
        
        <div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
   <!-- <p> ... </p>    -->
  </div>
  <!-- Table -->
  <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Media</th>
            <th>Salvar</th>
          </tr>
      </thead>
      <tbody>
      <form action="fachadaAlterarNota.php" method="POST">
          
          <?php 
          echo "<input type='hidden' name='id_aluno' value=".$row['id_aluno'].">";
          echo "<input type='hidden' name='id_turma' value=".$id_turma.">";
          echo '<tr>';
              echo"<td>".$row['nome_aluno']."</td>" ;
              echo"<td>".$row['matricula_aluno']."</td>" ;
              echo"<td> <input type='text' id='nota1' name='nota1' size=4 value= ".$row['nota1'] ."> </td>" ; 
              echo"<td> <input type='text' id='nota2' name='nota2' size=4 value= ".$row['nota2'] ."> </td>" ;
              echo"<td> <input type='text' id='nota3' name='nota3' size=4 value= ".$row['nota3'] ."> </td>" ; 
              echo"<td> <input type='text' id='nota4' name='nota4' size=4 value= ".$row['nota4'] ."> </td>" ; 
              echo"<td> <input type='text' id='media' name='media' size=4 value= ".$row['media'] ."> </td>" ;
              echo"<td> <input type='submit' id = 'bm' value='Salvar' /> </td>" ;
              echo "</tr>";
              ?>
      </form>
      
          <?php
          while($row = mysql_fetch_array($rs)){ ?>
          <form action="fachadaAlterarNota.php" method="POST">
              <?php
              echo "<input type='hidden' name='id_aluno' value=".$row['id_aluno'].">";
              echo "<input type='hidden' name='id_turma' value=".$id_turma.">";
              echo '<tr>';
              echo"<td>".$row['nome_aluno']."</td>" ;
              echo"<td>".$row['matricula_aluno']."</td>" ;
              echo"<td> <input type='text' id='nota1' name='nota1' size=4 value= ".$row['nota1'] ."> </td>" ; 
              echo"<td> <input type='text' id='nota2' name='nota2' size=4 value= ".$row['nota2'] ."> </td>" ;
              echo"<td> <input type='text' id='nota3' name='nota3' size=4 value= ".$row['nota3'] ."> </td>" ; 
              echo"<td> <input type='text' id='nota4' name='nota4' size=4 value= ".$row['nota4'] ."> </td>" ; 
              echo"<td> <input type='text' id='media' name='media' size=4 value= ".$row['media'] ."> </td>" ;
              echo"<td> <input type='submit' id = 'bm' value='Salvar' /> </td>" ;
              echo "</tr>"; ?>
          </form>
          <?php }
          ?>
      
      </tbody>
  </table>
  
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