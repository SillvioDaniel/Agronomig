<?php
//Definir as variaveis para conexao com o Banco de Dados
define('server','mysql:host=localhost; dbname=trab_agronomig');
define('usuario','root');
define('senha','');

//Classe Clientes
class Login{
    //Atributos da classe(campos da tabela cliente)
    public $nome;
    public $senha;
    
     public function validar(){
          //Criar a conexao com o banco de dados com o PDO
        $pdo = new PDO(server,usuario,senha);
        //Criar o comando sql
        
        $smtp = $pdo->prepare('select codigo from cliente where usuario = :usuario and senha = :senha' );
        //verificar see foi enviado valores pelo formulário
        if(isset($_GET["usuario"]) && isset($_GET["senha"])){

 //preencher os atributos com os valores recebidos
            $this->usuario = $_GET["usuario"];
            $this->senha = $_GET["senha"];

        $smtp->execute(array(
                ':usuario' => $this->usuario,
                ':senha'=> $this->senha
            ));
        if ($smtp->rowCount() > 0) { 
       $row =  $smtp->fetch();
       $login = $row['0'];

        header("location:login/LOGIN.php?tx=".urlencode($login)."");


            }else{
                  echo '<script type="text/javascript">alert("USUARIO OU SENHA INCORRETOS");</script>';
            }
            }else{
                 echo  '<script type="text/javascript">alert("DIGITE TODAS AS INFORMAÇÕES!");</script>';
            }
        }
    }