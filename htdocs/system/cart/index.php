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
    <title>Página Inicial</title>
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
        <a href="/system" style="
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
          ">PRODUTOS</button></a>
      </div>

    </header>
    <!--Conteúdo a aprtir daqui-->
    <section>
      <!--
    <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-block-dc1a-2">
    <div class="u-container-style u-expanded-width u-product u-white u-block-dc1a-3">
      <div class="u-container-layout u-valign-middle-md u-block-dc1a-4">                                        
      <img alt="" class="u-image u-image-default u-product-control u-block-dc1a-5" data-image-width="391" data-image-height="429" src="/system/images/Caneca.jpg"><div style="
    display: inline;
    width: max-content;
    align-items: end;
"><h3 class="u-align-left u-text u-block-dc1a-10">Amostra de Título&nbsp;&nbsp;<span class="u-file-icon u-icon u-block-dc1a-11"><img src="/system/images/477406.png" alt="" data-original-src="/system/images/477406.png" data-color="#f7ac16"></span>&ZeroWidthSpace;</h3>
<a href="/system/cart/action.php" class="u-black u-btn u-button-style u-product-control u-block-dc1a-9" style="
    width: 45%;
">FINALIZAR COMPRA<br></a></div></div>
    </div>
  </div>-->
      <?php
      $servidor = 'sql107.epizy.com';
      $username = 'epiz_33087609';
      $password = 'OpCrBfrw9GxRPNZ';
      $database = 'epiz_33087609_Users';
      $conexao = mysql_connect($servidor, $username, $password) 
        or die("Erro ao conectar ao banco de dados");
      $db = mysql_select_db($database)
        or die("Erro ao selecionar banco de dados");
      $query = mysql_query("SELECT * FROM COMPRAR WHERE FK_USUARIOS_ID_USER = ".$_SESSION['ID_USER']);
      $cont = mysql_num_rows($query);
      /*for ($i=0; $i < $cont; $i++) { 
    echo '<div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-block-dc1a-2"><div class="u-container-style u-expanded-width u-product u-white u-block-dc1a-3"><div class="u-container-layout u-valign-middle-md u-block-dc1a-4"><img alt="" class="u-image u-image-default u-product-control u-block-dc1a-5" data-image-width="391" data-image-height="429" src="/system/images/Caneca.jpg"><div style="display: inline; width: max-content; align-items: end;"><h3 class="u-align-left u-text u-block-dc1a-10">'.$compras[1.0].'&nbsp;&nbsp;<span class="u-file-icon u-icon u-block-dc1a-11"><img src="/system/images/477406.png" alt="" data-original-src="/system/images/477406.png" data-color="#f7ac16"></span>&ZeroWidthSpace;</h3><a href="/system/cart/action.php" class="u-black u-btn u-button-style u-product-control u-block-dc1a-9" style=" width: 45%;">FINALIZAR COMPRA<br></a></div></div></div></div>';
  }*/
      //Código de https://www.linhadecomando.com/php/php-mysql-obtendo-o-numero-de-linhas-de-uma-consulta-select#:~:text=MySQL%20PHP-,PHP%2DMySQL%3A%20Obtendo%20o%20n%C3%BAmero%20de,linhas%20de%20uma%20consulta%20(select)&text=Para%20trabalhar%20com%20o%20n%C3%BAmero,retornam%20um%20conjunto%20de%20resultados.
      if($cont == 0) {
        echo '<h3 style="text-align: center">Carrinho vazio! Adicione itens pela guia <a href="/system">PRODUTOS</a>.</h3>';
      }
      else {
        echo '<h3 style="text-align: center;/* margin-bottom: 0px; */padding: 29px;">Não esvazie seu carrinho após realizar sua compra!<br>Adicione todos os itens desejados e realize sua compra pressionando o botão <a href="#finish">finalizar compras</a></h3>';    
        while($rows = mysql_fetch_array($query)){
          $produto = $cls->GetProd($rows['FK_PRODUTOS_ID_PROD']);
          if (($dados[5] != "DIRETORIA") && $produto[1] == "DBV-BACKPACK") {
            $valor = 15;
            echo '<div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-block-dc1a-2"><div class="u-container-style u-expanded-width u-product u-white u-block-dc1a-3"><div class="u-container-layout u-valign-middle-md u-block-dc1a-4"><img alt="" class="u-image u-image-default u-product-control u-block-dc1a-5" data-image-width="391" data-image-height="429" src="/system/images/'.$produto[4].'"><div style="display: inline; width: max-content; align-items: end;"><h3 class="u-align-left u-text u-block-dc1a-10">'.$produto[1].'<br/>Valor: '.$valor.'&nbsp;&nbsp;<span class="u-file-icon u-icon u-block-dc1a-11"><img src="/system/images/477406.png" alt="" data-original-src="/system/images/477406.png" data-color="#f7ac16"></span>&ZeroWidthSpace;<br/>Situação do Item: '.$rows['SITUACAO_COMP'].'</h3></div></div></div></div>';
          }
          else {
            echo '<div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-block-dc1a-2"><div class="u-container-style u-expanded-width u-product u-white u-block-dc1a-3"><div class="u-container-layout u-valign-middle-md u-block-dc1a-4"><img alt="" class="u-image u-image-default u-product-control u-block-dc1a-5" data-image-width="391" data-image-height="429" src="/system/images/'.$produto[4].'"><div style="display: inline; width: max-content; align-items: end;"><h3 class="u-align-left u-text u-block-dc1a-10">'.$produto[1].'<br/>Valor: '.$produto[2].'&nbsp;&nbsp;<span class="u-file-icon u-icon u-block-dc1a-11"><img src="/system/images/477406.png" alt="" data-original-src="/system/images/477406.png" data-color="#f7ac16"></span>&ZeroWidthSpace;<br/>Situação do Item: '.$rows['SITUACAO_COMP'].'</h3></div></div></div></div>';
          }      
          /*if($rows['SITUACAO_COMP'] == 'NO CARRINHO')
      {        
        echo '<div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-block-dc1a-2"><div class="u-container-style u-expanded-width u-product u-white u-block-dc1a-3"><div class="u-container-layout u-valign-middle-md u-block-dc1a-4"><img alt="" class="u-image u-image-default u-product-control u-block-dc1a-5" data-image-width="391" data-image-height="429" src="/system/images/'.$produto[4].'"><div style="display: inline; width: max-content; align-items: end;"><h3 class="u-align-left u-text u-block-dc1a-10">'.$produto[1].'<br/>Valor: '.$produto[2].'&nbsp;&nbsp;<span class="u-file-icon u-icon u-block-dc1a-11"><img src="/system/images/477406.png" alt="" data-original-src="/system/images/477406.png" data-color="#f7ac16"></span>&ZeroWidthSpace;<br/>Situação do Item: '..'</h3></div></div></div></div>';
      } */     
        }

        echo '<a href="/system/cart/action.php" id="finish" class="u-black u-btn u-button-style u-product-control u-block-dc1a-9" style="width: 100%;margin-top: 10px;">Finalizar as compras<br></a><a href="/system/cart/delete.php" class="u-black u-btn u-button-style u-product-control u-block-dc1a-9" style="width: 100%;margin-block: 5px;">Esvaziar o carrinho<br></a>';
      }
      ?>
    </section>    

    <?php
    }
    else
    {?>
    <header>
      <div class="antinfo" style="display: flex">
        <img src="/system/Branco.png" alt=""
             style="width: 20%;border-color: gray;background-color: white;border-radius: 10%">
        <h2 style="text-align: center;margin-inline: 2%;margin-block-start: 9%;"><b>EMPÓRIO DAS ESTRELAS</b></h2>
      </div>
      <a href="/login"><button id="exite" style="
        margin-inline: 23%;
        margin-top: 5px;
        cursor: pointer;
        color:white;
        background-color: rgb(0, 100, 100);
        font-family: 'Verdana';
        display: block;
        border-radius: 5px;
        width: 50%;
        height: 30px;
        font-size: 12pt;
        text-align: center;
        border-style: groove;
        border-color: white;
        ">ENTRAR</button></a>
    </header>
    <h3 style="text-align: center">Entre no sistema para visualizar o carrinho!</h3>  
    <?php  
    }?>


    <!-- #region -->
    <style data-mode="XL" data-visited="true">@media (min-width: 1200px) {
      .u-block-dc1a-1 {
        background-image: none;
      }
      .u-block-dc1a-2 {
        min-height: 674px;
      }
      .u-block-dc1a-3 {
        min-height: 652px;
        background-image: none;
        margin-top: 50px;
        margin-bottom: 50px;
      }
      .u-block-dc1a-4 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .u-block-dc1a-5 {
        width: 540px;
        height: 592px;
        margin-top: 0;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0;
      }
      .u-block-dc1a-10 {
        margin-top: -516px;
        margin-right: 101px;
        margin-bottom: 0;
        margin-left: 592px;
      }
      .u-block-dc1a-9 {
        background-image: none;
        border-style: none;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 309px;
        margin-right: 101px;
        margin-bottom: 0;
        margin-left: auto;
        padding-top: 10px;
        padding-right: 108px;
        padding-bottom: 10px;
        padding-left: 106px;
      }
      }</style>
    <style data-mode="LG" data-visited="true">@media (max-width: 1199px) and (min-width: 992px) {
      .u-block-dc1a-1 {
        background-image: none;
      }
      .u-block-dc1a-2 {
        min-height: 579px;
      }
      .u-block-dc1a-3 {
        background-image: none;
        margin-top: 50px;
        margin-bottom: -60px;
        height: auto;
        min-height: 652px;
      }
      .u-block-dc1a-4 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .u-block-dc1a-5 {
        width: 440px;
        height: 483px;
        margin-top: 0;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0;
      }
      .u-block-dc1a-10 {
        margin-top: -532px;
        margin-right: 205px;
        margin-bottom: 0;
        margin-left: 492px;
      }
      .u-block-dc1a-9 {
        background-image: none;
        border-style: none;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 325px;
        margin-right: 0;
        margin-bottom: 0;
        margin-left: auto;
        padding-top: 10px;
        padding-right: 108px;
        padding-bottom: 10px;
        padding-left: 106px;
      }
      }</style>
    <style data-mode="MD" data-visited="true">@media (max-width: 991px) and (min-width: 768px) {
      .u-block-dc1a-1 {
        background-image: none;
      }
      .u-block-dc1a-2 {
        min-height: 474px;
      }
      .u-block-dc1a-3 {
        background-image: none;
        margin-top: 50px;
        margin-bottom: 50px;
        height: auto;
        min-height: 652px;
      }
      .u-block-dc1a-4 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .u-block-dc1a-5 {
        width: 330px;
        height: 362px;
        margin-top: 357px;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0;
      }
      .u-block-dc1a-10 {
        margin-top: -518px;
        margin-right: 205px;
        margin-bottom: 0;
        margin-left: 273px;
      }
      .u-block-dc1a-9 {
        background-image: none;
        border-style: none;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 311px;
        margin-right: 0;
        margin-bottom: 0;
        margin-left: auto;
        padding-top: 10px;
        padding-right: 108px;
        padding-bottom: 10px;
        padding-left: 106px;
      }
      }</style>
    <style data-mode="SM" data-visited="true">@media (max-width: 767px) and (min-width: 576px) {
      .u-block-dc1a-1 {
        background-image: none;
      }
      .u-block-dc1a-2 {
        min-height: 974px;
      }
      .u-block-dc1a-3 {
        background-image: none;
        margin-top: 50px;
        margin-bottom: 50px;
        height: auto;
        min-height: 652px;
      }
      .u-block-dc1a-4 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .u-block-dc1a-5 {
        width: 480px;
        height: 480px;
        margin-top: 0;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0;
      }
      .u-block-dc1a-10 {
        margin-top: 26px;
        margin-right: 162px;
        margin-bottom: 0;
        margin-left: 133px;
      }
      .u-block-dc1a-9 {
        background-image: none;
        border-style: none;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 325px;
        margin-right: 0;
        margin-bottom: 0;
        margin-left: 0;
        padding-top: 10px;
        padding-right: 108px;
        padding-bottom: 10px;
        padding-left: 106px;
      }
      }</style>
    <style data-mode="XS" data-visited="true">@media (max-width: 575px) {
      .u-block-dc1a-1 {
        background-image: none;
      }
      .u-block-dc1a-2 {
        min-height: 821px;
      }
      .u-block-dc1a-3 {
        background-image: none;
        margin-top: 50px;
        margin-bottom: 50px;
        height: auto;
        min-height: 796px;
      }
      .u-block-dc1a-4 {
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .u-block-dc1a-5 {
        width: 280px;
        height: 280px;
        margin-top: 0;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: 0;
      }
      .u-block-dc1a-10 {
        width: auto;
        margin-top: 76px;
        margin-left: 0;
        margin-right: 0;
        margin-bottom: 0;
      }
      .u-block-dc1a-9 {
        background-image: none;
        border-style: none;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 305px;
        margin-left: auto;
        margin-right: 0;
        margin-bottom: 0;
        padding-top: 10px;
        padding-right: 53px;
        padding-bottom: 10px;
        padding-left: 53px;
      }
      }</style>

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
