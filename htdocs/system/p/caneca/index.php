<!DOCTYPE html>
<?php
    require_once '../../../login/classes.php';
    $cls = new database;
?>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/system/Logo Branco Estrelas da Cruz.PNG">
    <link rel="stylesheet" href="style.a.css">        
    <title>Empório das Estrelas</title>
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <link rel="stylesheet" href="Página-1.css" media="screen">
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
$cls->conectar("xxxxxxxx", "xxxxxxxxx", "xxxxxxxxxx", "xxxxxxx");
if(isset($_SESSION['ID_USER']))
{ //Thiago Sousa -> 926380
  // Ridalva Souza -> 925500
  //echo $_SESSION['ID_USER'];  
  $dados = $cls->GetData($_SESSION['ID_USER']);  
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
                  <img src="images/Branco.png" alt="" style="width: 10%; border-color: gray; background-color: white; border-radius: 10%">
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
    $link = "/system/p/caneca/action.php";
}
else
{?>
      <header>
        <div class="antinfo" style="display: flex">
            <img src="images/Branco.png" alt="" style="width: 20%;border-color: gray;background-color: white;border-radius: 10%">
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
  $link = "/login";
}
$producto = $cls->GetProd('1000003');
?>
    <section class="u-clearfix u-section-1" id="sec-d35f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-1" src="" data-image-width="391" data-image-height="429">
                    <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-size-60 u-layout-cell-2">
                        <div class="u-container-layout u-valign-top u-container-layout-2">
                          <h3 class="u-text u-text-1"><?php echo $producto[1];?></h3>
                          <p class="u-text u-text-2">Val&ZeroWidthSpace;&ZeroWidthSpace;or: <?php echo $producto[2];?><span class="u-file-icon u-icon u-icon-1"><img src="images/star.png" alt=""></span>                          
                          </p>
                          <p class="u-text u-text-2">Quantidade disponível: <?php echo $producto[3];?></p>
                          <p class="u-text u-text-2">Descrição do produto:<br><br>Caneca de porcelana com emblema D1</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-size-60 u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                        <?php 
                          if ($dados[5] == 'DIRETORIA') {
                            echo '<h3 style="text-align: center">Produto inválido para membros da diretoria!</h3>';
                          }
                          else{
                            echo '<a href="'.$link.'" class="u-align-center u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-text-hover-white u-btn-1" style="width: 100%" method="POST">ADICIONAR AO CARRINHO&nbsp;&nbsp;</a>';
                            //echo '<h3 style="text-align: center">Produto reservado!</h3>';
                          }?>
                          <p class="u-align-center u-text u-text-3">...<br>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3657"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sistema desenvolvido por <a href="https://thiagosousa81.wordpress.com" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">Thiago Sousa</a>
        </p>
      </div></footer>                                          
          </section>       
    </body>
</html>
