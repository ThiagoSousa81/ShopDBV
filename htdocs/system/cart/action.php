<!DOCTYPE html>
<?php
    require_once '../../login/classes.php';
    $cls = new database;
?>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/system/Logo Branco Estrelas da Cruz.PNG">
    <link rel="stylesheet" href="../style.css">
    <title>Empório das Estrelas</title>
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/Branco.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
</head>

<body>
    <?php
session_start();
if(isset($_SESSION['ID_USER']))
{ //Thiago Sousa -> 926380
  // Ridalva Souza -> 925500
  //echo $_SESSION['ID_USER'];
  $cls->conectar("epiz_33087609_Users", "sql107.epizy.com", "epiz_33087609", "OpCrBfrw9GxRPNZ");
  $dados = $cls->GetData($_SESSION['ID_USER']);

  $compras = $cls->GetComp($_SESSION['ID_USER']);
    /*for ($i=0; $i < $compras->array_count_values(); $i++) { 
      echo $compras[$i];
    }*/
  
  /*
  $id = $dados[0];
  $nome = $dados[1];
  $unidade = $dados[2];
  $estrelas = $dados[3];
  echo $id;
  echo $nome;
  echo $unidade;  
  echo $estrelas;*/
  ?>
    <header style="background-color: white; color: rgb(150 0 0)">
        <div class="info" style="display: block-flex">
            <div class="antinfo" style="display: flex">
                <img src="/system/Branco.png" alt=""
                    style="width: 10%; border-color: gray; background-color: white; border-radius: 10%">
                <h2 style="text-align: center; margin-inline-start: 10%; margin-block-start: 2%"><b>EMPÓRIO DAS
                        ESTRELAS</b></h2>
            </div>
    </header>
    <header class="cabecalho" style="display: flex">
        <div>
            <?php echo "<h5>Nome: ".$dados[1]."</h5>";?>
            <?php echo "<h5>Unidade: ".$dados[5]."</h5>";?>
            <?php echo "<h5>Estrelas: ".$dados[4]."</h5>";?>
        </div>
        </div>

        <div class="botao" style="display:inline;">
            <a href="/system/exit.php"><button id="exite" style="cursor: pointer; 
                    color:white;
                    background-color: rgb(0, 100, 100);
                    font-family: 'Verdana';                    
                    display: block;
                    border-radius: 5px;
                    block-size: 100%;
                    width: 100px;
                    height: 30px;
                    font-size: 12pt;
                    text-align: center;
                    border-style: groove;
                    border-color: white;
                    ">SAIR</button></a>
<a href="/system/cart" style="
"><button id="exite" style="
                    margin-top: 5px;
                    cursor: pointer;
                    color:white;
                    background-color: rgb(0, 100, 100);
                    font-family: 'Verdana';
                    display: block;
                    border-radius: 5px;
                    block-size: 100%;
                    width: 100px;
                    height: 30px;
                    font-size: 12pt;
                    text-align: center;
                    border-style: groove;
                    border-color: white;
                    ">CARRINHO</button></a>
        </div>
    
    </header>
    <body>
<?php
}  // <------< confirmadamente correto
    session_start();
    if (isset($_SESSION['ID_USER'])) {
        $servidor = 'sql107.epizy.com';
        $username = 'epiz_33087609';
        $password = 'OpCrBfrw9GxRPNZ';
        $database = 'epiz_33087609_Users';
        $conexao = mysql_connect($servidor, $username, $password) 
				or die("Erro ao conectar ao banco de dados");
	        $db = mysql_select_db($database)
                or die("Erro ao selecionar banco de dados");
        

        $query = mysql_query("SELECT `FK_PRODUTOS_ID_PROD` FROM `COMPRAR` WHERE `FK_USUARIOS_ID_USER` = '".$_SESSION['ID_USER']."' AND `SITUACAO_COMP` = 'NO CARRINHO'");
        $cont = mysql_num_rows($query);
        $stars = 0;
        while($rows = mysql_fetch_array($query)){
            $q1 = mysql_query("SELECT `NOME_PROD` FROM PRODUTOS WHERE `ID_PROD` = ". $rows[0]);
            $a1 = Mysql_fetch_array($q1);
            if ($a1[0] == "DBV-BACKPACK" && $dados[5] != "DIRETORIA") {
                $stars = $stars + 15;
            }
            else {
                $q2 = mysql_query("SELECT `VALOR_PROD` FROM `PRODUTOS` WHERE `ID_PROD` = ". $rows[0]);
                $a2 = mysql_fetch_array($q2);
                $stars = $stars + $a2[0];
            }
        }        
        if ($dados[4] > $stars)
        {
            try {
                $var = $dados[4] - $stars;
                $query = mysql_query("UPDATE `USUARIOS` SET `STARS_USER` = '".$var."' WHERE ID_USER = ".$_SESSION['ID_USER']);
                $query = mysql_query("UPDATE COMPRAR SET SITUACAO_COMP = 'COMPRADO' WHERE FK_USUARIOS_ID_USER = ".$_SESSION['ID_USER']." AND SITUACAO_COMP = 'NO CARRINHO'");        
                
              $msg = 'Itens comprados com sucesso! Acesse <a href="https://api.whatsapp.com/send?phone=5571992165488&text=Ol%C3%A1%2C%20acabei%20de%20realizar%20as%20compras%20no%20Emp%C3%B3rio%20das%20Estrelas.%20Estou%20solicitando%20a%20retirada%20dos%20meus%20produtos.%20Meu%20ID%20%C3%A9%20'.$dados[0].'" target="_blank" >aqui</a> para receber seus produtos!';
            } 
            catch (Exception $th) {
                throw $th;
            }
        }
        else 
        {
            $msg = "Estrelas insuficientes! Esvazie o carrinho e adicione um item de cada vez!";
        }    
        
        echo '<h3 style="text-align: center">'.$msg.'</h3>';
    }
?>   
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3657">
      <div class="u-clearfix u-sheet u-sheet-1">
          <p class="u-small-text u-text u-text-variant u-text-1">Sistema desenvolvido por&nbsp;<a
                  href="https://thiagosousa81.wordpress.com"
                  class="u-active-none u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-1"
                  target="_blank">Thiago Sousa</a>
          </p>
      </div>
  </footer>
    </body>
    </html>

