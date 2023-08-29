<?php
    session_start();
    if(!isset($_SESSION['ID_USER']))
    {               
        ?>        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <p>Faça
                <a href="http://dbv-shop.epizy.com/login/">login</a>
            para ter acesso ao painel principal!</p>
        </body>
        </html>            
        <?php
        exit;
    }
    else
    {?>
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>
                <h1>BEM VINDU!!</h1>
                <a href="../system/exit.php"> Sair </a>    
            </body>
       </html>
       <?php
       echo $_SESSION['ID_USER'];
    }
?>