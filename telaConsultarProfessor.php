<html lang="pt">
    
    <?php 
    include("banco/banco.php");
    $query = "Select * from professor order by id_professor";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php");  ?>
    
    <body>
        <?php include("escolhedorCabecario.php"); ?>
        <h3>Consulta de professor</h3>
        
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
            <th>Id</th>
            <th>Nome</th>
            <th>Matricula</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['id_professor']."</td>" ;
              echo"<td>".$row['nome_professor']."</td>" ;
              echo"<td>".$row['matricula_professor']."</td>" ; 
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';  
              echo"<td>".$row['id_professor']."</td>" ;
              echo"<td>".$row['nome_professor']."</td>" ;
              echo"<td>".$row['matricula_professor']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
  </div>
  <form action="telaConsultarDisciplinasLecionadas.php" method="POST">
      <center>
        <div>
          <label>Consulte as disciplinas lecionadas</label>
            <input type="text" name="id_professor" id="idDiaria" required="required">
        </div>
          <div>
                <input type="submit" value="Consultar">
          </div>
      </center>
  </form>

        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>