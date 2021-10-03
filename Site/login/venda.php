<?php
header("Content-Type:Text/html; charset=utf8");

//Definir as variaveis para conexao com o Banco de Dados
define('server','mysql:host=localhost; dbname=trab_agronomig');
define('usuario','root');
define('senha','');

//Classe Clientes
class Clientes{
    //Atributos da classe(campos da tabela cliente)
    public $codigo;
    public $total;
    public $data;
    public $vendedores_cpf;
    public $produtos_codigo;
    public $cliente_codigo;
    public $quant;
    public $nois;


    //Meteodo para listar todos os Cliente (select)
    public function listarTodos(){
        //Criar a conexao com o banco de dados com o PDOs
        $pdo = new PDO(server,usuario,senha);
        //Criar o comando sql
        $this->codigo = $_GET["tx"];

        $smtp = $pdo->prepare('select * from cliente where codigo = :tx');

        $smtp->execute(array(
                ':tx' => $this->codigo
            ));
        //Executar o comando no Banco de Dados
        $smtp->execute();
        //Verificar se o comando retornou resultados
        if ($smtp->rowCount() > 0){
            //Retornar os dados para o HTML
            return $result = $smtp->fetchAll (PDO::FETCH_CLASS);
        }
    }


    //meteodo para inserir Clientes
    public function inserir(){
        //criar a conexao com o banco de dados
        $pdo = new PDO(server,usuario,senha);

        //verificar see foi enviado valores pelo formulário
        if(isset($_GET["total"]) && isset($_GET["data"]) && isset($_GET["vendedores_cpf"]) && isset($_GET["produtos_codigo"]) && isset($_GET["cliente_codigo"])){

            //preencher os atributos com os valores recebidos
            $this->total = $_GET["total"];
            $this->data = $_GET["data"];
            $this->vendedores_cpf = $_GET["vendedores_cpf"];
            $this->produtos_codigo = $_GET["produtos_codigo"];
            $this->cliente_codigo = $_GET["cliente_codigo"];
            $nois = $_GET["cliente_codigo"];
            //Criar o comando SQL com parametros para insercao
            $smtp = $pdo->prepare("insert into venda(codigo,total,data,vendedores_cpf,produtos_codigo,cliente_codigo) values(null, :total, :data, :vendedores_cpf, :produtos_codigo, :cliente_codigo) ");
            //Executar o comando banco de dados passando os valores recebidos
            $smtp->execute(array(
                ':total' => $this->total,
                ':data' => $this->data,
                ':vendedores_cpf' => $this->vendedores_cpf,
                ':produtos_codigo' => $this->produtos_codigo,
                ':cliente_codigo' => $this->cliente_codigo,
            ));

            //Atualizando o quantidade
            $this->quant = $_GET["quant"];
            $smtpp = $pdo->prepare("update estoque set quantidade = quantidade - :quant where codigo = :produtos_codigo");

            $smtpp->execute(array(
                ':produtos_codigo' => $this->produtos_codigo,
                ':quant' => $this->quant
            ));


           
            //Testar se retornou algum resultado
            if ($smtp->rowCount() > 0) {

                header("location:LOGIN.php?tx=".urlencode($nois)."");//Retornar para o index.php
            }else{
                header("location:login.php");
            }
        }else{
            header("location:conta.php");//Retornar para o index.php
        }
    }



    //Funcao para listar os dados do banco
    public function listarCodigo($codigo){

        //Verificar se recebeu o codigo como parametro
        if(isset($codigo)){
            //Preenche os atributos com os valroes do formulário
            $this->codigo = $codigo;
            //Criar a conexao com o banco de dados
            $pdo = new PDO(server,usuario,senha);
            //Criar o comando sql
            $smtp = $pdo->prepare("select * from venda where codigo = :codigo");

            //Executar no banco passando o numero como parametro
            $smtp->execute(array(
                ':codigo' => $this->codigo
            ));

            //Verficar se retornou dados
            if ($smtp->rowCount() > 0) {
                return $result = $smtp->fetchObject();
            }
        }
    }
}
?>