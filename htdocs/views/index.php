<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="/system/Logo Branco Estrelas da Cruz.PNG">
    <title>Compras - Empório das Estrelas</title>
  </head>
  <body>
    <?php
    $servidor = 'sql107.epizy.com';
    $username = 'epiz_33087609';
    $password = 'OpCrBfrw9GxRPNZ';
    $database = 'epiz_33087609_Users';
    $conexao = mysql_connect($servidor, $username, $password) 
      or die("Erro ao conectar ao banco de dados");
    $db = mysql_select_db($database);

    $query = mysql_query("SELECT ID_COMP, NOME_USER, NOME_PROD, ID_PROD, SITUACAO_COMP FROM COMPRAR AS C INNER JOIN PRODUTOS AS P INNER JOIN USUARIOS AS U ON C.FK_PRODUTOS_ID_PROD = P.ID_PROD AND C.FK_USUARIOS_ID_USER = U.ID_USER ORDER BY `C`.`ID_COMP` DESC");
    $cont = mysql_num_rows($query);            
        php?>
    <div class="container">
      <h2 style="text-align: center">Empório das Estrelas</h2>
      <p style="text-align: center">
        Todos os registros de transações.
      </p>
      <input class="form-control" id="myInput" type="text" placeholder="Pesquisar...">
      <table class="table table-bordered table-dark table-striped">
        <thead>
          <tr>
            <th>NOME</th>
            <th>PRODUTO</th>
            <th>COD PRODUTO</th>
            <th>SITUAÇÃO</th>
          </tr>
        </thead>
        <tbody id="myTable">
          
          <?php
      while($rows = mysql_fetch_array($query)){
        echo '<tr><td>'.$rows[1].'</td><td>'.$rows[2].'</td><td>'.$rows[3].'</td><td>'.$rows[4].'</td></tr>';
      }
    php?>
        </tbody>
      </table>
    </div>
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() { 
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
  </body>
</html>