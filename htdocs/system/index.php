<!DOCTYPE html>
<?php
require_once '../login/classes.php';
$cls = new database;
?>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="Logo Branco Estrelas da Cruz.PNG">
    <link rel="stylesheet" href="style.css">        
    <title>Empório das Estrelas</title>
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">            
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Branco.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
  </head>
  <body>
    <?php
    session_start();
    if(isset($_SESSION['ID_USER']))
    { 
      //echo $_SESSION['ID_USER'];
      $cls->conectar("xxxxxx", "xxxxxxxx", "xxxxxxxx", "xxxxxxx");
      $dados = $cls->GetData($_SESSION['ID_USER']);      
    ?>
    <header style="background-color: white; color: rgb(150 0 0)">
      <div class="info" style="display: block-flex">
        <div class="antinfo" style="display: flex">
          <img src="Branco.png" alt="" style="width: 10%; border-color: gray; background-color: white; border-radius: 10%">
          <h2 style="text-align: center; margin-inline-start: 10%; margin-block-start: 2%"><b>EMPÓRIO DAS ESTRELAS</b></h2>
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
        <a href="exit.php"><button id="exite" style="cursor: pointer; 
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
        <a href="/system/cart"><button id="exite" style="
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
          margin-top: 5px;
          ">CARRINHO</button></a>
      </div>                    
    </header>
    <!--
    <header class="cabecalho"> 
      <div>
        <?php //echo "<h3>Nome: ".$dados[1]."</h3>";?>            
        <?php //echo "<h4>Unidade: ".$dados[5]."</h4>";?>
        <?php //echo "<h4>Estrelas: ".$dados[4]."</h4>";?>        
      </div>                      -->

    <?php
      /*echo "Faça login para continuar!";
    header("Location: ..login");
    exit;*/
    }
    else
    {?>
    <header>
      <div class="antinfo" style="display: flex">
        <img src="Branco.png" alt="" style="width: 20%;border-color: gray;background-color: white;border-radius: 10%">
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
    <?php  
    }
    global $preco;
    if ($dados[5] == "DIRETORIA") {    
      $preco = 999;

    } else {
      $preco = 15;
    }
    ?>
    <section class="u-align-center u-clearfix u-palette-5-light-1 u-section-1" id="carousel_c008">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <?php
            $servidor = 'xxxxxx';
            $username = 'xxxxx';
            $password = 'xxxxxx';
            $database = 'xxxxxxxxx';
            $conexao = mysql_connect($servidor, $username, $password) 
              or die("Erro ao conectar ao banco de dados");
            $db = mysql_select_db($database);

            $query = mysql_query("SELECT * FROM `PRODUTOS` WHERE OK_PROD = 1 AND NOME_PROD = 'DBV-BACKPACK'");
            $cont = mysql_num_rows($query);            
            while($rows = mysql_fetch_array($query)){
              echo '<div class="u-align-center u-container-style u-list-item u-repeater-item"><div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/'.$rows[4].'" data-image-width="358" data-image-height="451"><h4 class="u-custom-font u-font-raleway u-text u-text-1">'.$rows[1].'</h4><h3 class="u-text u-text-2">'.$preco.'&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span></h3><a href="http://dbv-shop.epizy.com'.$rows[5].'" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a></div></div>';
            }

            $query = mysql_query("SELECT * FROM `PRODUTOS` WHERE OK_PROD = 1 AND NOME_PROD <> 'DBV-BACKPACK'");
            $cont = mysql_num_rows($query);            
            while($rows = mysql_fetch_array($query)){
              echo '<div class="u-align-center u-container-style u-list-item u-repeater-item"><div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/'.$rows[4].'" data-image-width="358" data-image-height="451"><h4 class="u-custom-font u-font-raleway u-text u-text-1">'.$rows[1].'</h4><h3 class="u-text u-text-2">'.$rows[2].'&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span></h3><a href="http://dbv-shop.epizy.com'.$rows[5].'" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a></div></div>';
            }            
            ?>   

            <!--
            <section>
              <div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/sacola8.jpg" data-image-width="358" data-image-height="451">
                  <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                  <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                  </h3>
                  <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                </div>
              </div><div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/sacola7.jpg" data-image-width="358" data-image-height="451">
                  <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                  <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                  </h3>
                  <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                </div>
              </div><div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/sacola6.jpg" data-image-width="358" data-image-height="451">
                  <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                  <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                  </h3>
                  <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                </div>
              </div><div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/sacola5.jpg" data-image-width="358" data-image-height="451">
                  <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                  <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                  </h3>
                  <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                </div>
              </div><div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/sacola4.jpg" data-image-width="358" data-image-height="451">
                  <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                  <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                  </h3>
                  <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                </div>
              </div><div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/Sacola.jpg" data-image-width="358" data-image-height="451">
                  <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                  <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                  </h3>
                  <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/Bag3.jpg" data-image-width="358" data-image-height="451">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                            <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                          </div>
                        </div>
                        <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-1" src="images/backpack azul.jpg" data-image-width="358" data-image-height="451">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-1">DBV-BACKPACK</h4>
                            <h3 class="u-text u-text-2"><?php //echo $preco;?>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="http://dbv-shop.epizy.com/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-1">COMPRAR</a>
                          </div>
                        </div>
                        <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-contain u-image-default u-image-2" src="images/Almofada.jpg" data-image-width="218" data-image-height="110">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-3">Almofada Estrelas da Cruz</h4>
                            <h3 class="u-text u-text-4">75&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="http://dbv-shop.epizy.com/system/p/almofada/" class="u-btn u-btn-rectangle u-button-style u-white u-btn-2">COMPRAR</a>
                          </div>
                        </div>
                        <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width u-image u-image-default u-image-3" src="images/Caneca.jpg" data-image-width="391" data-image-height="429">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-5">Caneca Desbravador</h4>
                            <h3 class="u-text u-text-6">60&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="/system/p/caneca" class="u-btn u-btn-rectangle u-button-style u-white u-btn-3">COMPRAR</a>
                          </div>
                        </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-default u-image-1" src="images/Bone.jpg" data-image-width="411" data-image-height="433" style="
                height: 300;
            ">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-1">Boné DBV</h4>
                            <h3 class="u-text u-text-2">25&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="/system/p/bone" class="u-btn u-btn-rectangle u-button-style u-white u-btn-3">COMPRAR</a>
                          </div>
                        </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-contain u-image-default u-image-2" src="images/Canetas2.jpg" data-image-width="206" data-image-height="206">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-3">Caneta Estrelas da Cruz</h4>
                            <h3 class="u-text u-text-4">10&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="/system/p/caneta" class="u-btn u-btn-rectangle u-button-style u-white u-btn-2">comprar</a>
                          </div>
                        </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <img alt="" class="u-border-7 u-border-grey-5 u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-image u-image-default u-image-3" src="images/Mousepad.jpg" data-image-width="419" data-image-height="357">
                            <h4 class="u-custom-font u-font-raleway u-text u-text-5">Mouse-Pad Desbravador</h4>
                            <h3 class="u-text u-text-6">20&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/477406.png" alt=""></span>
                            </h3>
                            <a href="/system/p/mousepad" class="u-btn u-btn-rectangle u-button-style u-white u-btn-3">comprar</a>
                          </div>
                        </div>
          </section>
        -->
          </div>
        </div>
      </div>
    </section>        


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3657"><div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">Sistema desenvolvido por&nbsp;<a href="https://thiagosousa81.wordpress.com" class="u-active-none u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-1" target="_blank">Thiago Sousa</a>
      </p>
      </div></footer>       
  </body>
</html>
