<?php
    Class database
    {
        private $pdo;
        public $msg = "";
        public $dadosDaCompra = "";
        public $dadosDaCompra2 = "";
        public function conectar($nome, $host, $user, $password)
        {
            global $pdo;
            global $msg;
            try {
                
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$user,$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }
            
        }

        public function logar($user, $password)
        {
            global $pdo;  
            $sql = $pdo->prepare("SELECT ID_USER FROM USUARIOS WHERE NOME_USER = :u AND HASH_USER = :h");  
            $sql->bindValue(":u", $user);
            $sql->bindValue(":h", $password);    //lembrar de aplicar criptografia depois
            //$sql = $pdo->prepare("SELECT id_user FROM usuarios WHERE nome_user = '".$user."' AND hash_user = '".$password."'");  
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                $dados = $sql->fetch();
                session_start();
                $_SESSION['ID_USER'] = $dados['ID_USER'];                
                return true;
            }
            else
            {
                return false;
            }
        }
        public function GetData($id)

        {
            try {
                
                global $pdo;
                global $msg;
                $sql = $pdo->prepare("SELECT * FROM USUARIOS WHERE ID_USER = ".$id);  //Consulta
                $sql->execute(); // Execução
                $dados = $sql->fetch();
                /*
                $sql = $pdo->prepare("SELECT NOME_USER FROM USUARIOS WHERE ID_USER = ".$id);  //Consulta
                $sql->execute();
                $dados[1] = $sql->fetch();

                $sql = $pdo->prepare("SELECT STARS_USER FROM USUARIOS WHERE ID_USER = ".$id);  //Consulta
                $sql->execute();
                $dados[2] = $sql->fetch();

                $sql = $pdo->prepare("SELECT UNIDADE_USER FROM USUARIOS WHERE ID_USER = ".$id);  //Consulta
                $sql->execute();
                $dados[3] = $sql->fetch();*/
                return $dados;
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }            
        }

        public function GetProd($id)
        {
            try {
                global $pdo;
                global $msg;
                $sql = $pdo->prepare("SELECT * FROM PRODUTOS WHERE ID_PROD = ".$id);  //Consulta
                $sql->execute(); // Execução
                $dados = $sql->fetch();
                return $dados;
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }  
        }

        public function GetValueProd($id)
        {
            try {
                global $pdo;
                global $msg;
                $sql = $pdo->prepare("SELECT VALOR_PROD FROM PRODUTOS WHERE ID_PROD = ".$id);  //Consulta
                $sql->execute(); // Execução
                $dados = $sql->fetch();
                return $dados;
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }  
        }

        public function GetValueQNT($id)
        {
            try {
                global $pdo;
                global $msg;
                $sql = $pdo->prepare("SELECT QNT_PROD FROM PRODUTOS WHERE ID_PROD = ".$id);  //Consulta
                $sql->execute(); // Execução
                $dados = $sql->fetch();
                return $dados;
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }  
        }

        public function GetComp($id)
        {
            try {
                global $pdo;
                global $msg;
                $sql = $pdo->prepare("SELECT * FROM COMPRAR WHERE FK_USUARIOS_ID_USER = ".$id);  //Consulta
                $sql->execute(); // Execução                
                $dados = $sql->fetch();
                return $dados;
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }  
        }

        public function InsertCart($ID_USER, $ID_PROD, $ID_COMP, $SITUACAO_COMP, $HORA_COMP, $DATA_COMP)
        {
            try {
                global $pdo;
                global $msg;
                /*global $dadosDaCompra;
                global $dadosDaCompra2;
                $sql = $pdo->prepare("INSERT INTO COMPRAR VALUES (".$ID_USER.", ".$ID_PROD.", NULL, ".$SITUACAO_COMP.", ".$HORA_COMP.", ".$DATA_COMP.")");
                $sql->execute();
                
                $sql = $pdo->prepare("SELECT * FROM COMPRAR WHERE ID_COMP = 1");
                $sql->execute();
                $dadosDaCompra = $sql->fetch(); */
                
                $sql = $pdo->prepare("INSERT INTO `COMPRAR` (`FK_USUARIOS_ID_USER`, `FK_PRODUTOS_ID_PROD`, `ID_COMP`, `SITUACAO_COMP`, `HORA_COMP`, `DATA_COMP`) VALUES ('".$ID_USER."', '".$ID_PROD."', NULL, '".$SITUACAO_COMP."', '".$HORA_COMP."', '".$DATA_COMP."')");
                $sql->execute();
                //$sql = $pdo->prepare("INSERT INTO `COMPRAR` (`FK_USUARIOS_ID_USER`, `FK_PRODUTOS_ID_PROD`, `ID_COMP`, `SITUACAO_COMP`, `HORA_COMP`, `DATA_COMP`) VALUES ('1', '1000001', NULL, 'No carrinhu', '10:00:00', '2022-12-03')");
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }
             
        }
    }
?>