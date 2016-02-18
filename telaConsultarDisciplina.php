<html lang="pt">
    
    <?php 
    include("banco/banco.php");
    $query = "Select * from disciplina where ativo=1 order by id_disciplina";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php");  ?>
    
    <body>
        <?php include("escolhedorCabecario.php"); ?>
        <h3>Consulta de disciplina</h3>
        
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
            <th>Codigo</th>
            <th>Nome</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['id_disciplina']."</td>" ;
              echo"<td>".$row['cod']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ; 
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';  
              echo"<td>".$row['id_disciplina']."</td>" ;
              echo"<td>".$row['cod']."</td>" ;
              echo"<td>".$row['nome_disciplina']."</td>" ; 
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
  </div>

        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>