<!DOCTYPE html>
<?php
    require_once 'classes.php';
    $cls = new database;
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.a.css">
    <!-- pathfinder star mall-->
    <title>Empório das Estrelas</title>
    <link rel="shortcut icon" href="Logo Branco Estrelas da Cruz.PNG">
</head>

<body>
    <a href="https://thiagosousa81.wordpress.com" target="_blank"
        style="display: inline; margin-left: 3px; font-family: Arial, Helvetica, sans-serif; display: block; font-size: 75%; color: white">thiagosousa81.wordpress.com</a>
    <div id="corpo-form">
        <div id="titulos">
            <h3>EMPÓRIO DAS ESTRELAS</h3>
            <h4>Entre para começar</h4>
        </div>
        <form method="POST">
            <input type="user" name="user" placeholder="Usuário">
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" value="ENTRAR" id="butao" style="
    font-weight: bold;
">
        </form>
    </div>
    <?php
        if(isset($_POST['user']))
        {
            $user = addslashes($_POST['user']);
            $password = addslashes($_POST['password']);

            if(!empty($user) && !empty($password))
            {
                $cls->conectar("xxxx", "xxxxx", "xxxxxx", "xxxxxxxx");
                if($cls->msg == "")
                {
                    if($cls->logar($user, sha1($password)))
                    {
                        header("Location: ../system/index.php");
                    }
                    else
                    {
                       //echo "Usuário ou senha incorretos!";
                       ?>
                        <div class="ErrorMessage">
                            <p>Usuário ou senha incorretos!</p>
                        </div>

                       <?php
                    }
                }
                else
                {
                    //echo "Erro ao conectar!!!".$cls->msg;
                    ?>
                    <div class="ErrorMessage">
                        <p>Erro ao conectar com o banco de dados!</p>
                    </div>
                    <?php
                    echo $cls->msg;
                }
                

            }
            else
            {
                //echo "Preencha todos os campos!";
                header("Location: ../system/index.php");
            }
        }
    ?>
</body>
</html>
