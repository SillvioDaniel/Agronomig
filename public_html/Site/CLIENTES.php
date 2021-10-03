<?php
//Definir as variaveis para conexao com o Banco de Dados
define('server','mysql:host=localhost; dbname=trab_agronomig');
define('usuario','root');
define('senha','');

//Classe Clientes
class Clientes{
    //Atributos da classe(campos da tabela cliente)
    public $codigo;
    public $nome;
    public $cpf;
    public $telefone;
    public $endereco;
    public $estado;
    public $email;
    public $usuario;
    public $senha;

    //Meteodo para listar todos os Cliente (select)
    public function listarTodos(){
        //Criar a conexao com o banco de dados com o PDO
        $pdo = new PDO(server,usuario,senha);
        //Criar o comando sql
        $smtp = $pdo->prepare('select * from cliente');
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
        if(isset($_GET["nome"]) && isset($_GET["cpf"]) && isset($_GET["telefone"]) && isset($_GET["endereco"]) && isset($_GET["estado"]) && isset($_GET["email"]) && isset($_GET["usuario"]) && isset($_GET["senha"])){

            //preencher os atributos com os valores recebidos
            $this->nome = $_GET["nome"];
            $this->cpf = $_GET["cpf"];
            $this->telefone = $_GET["telefone"];
            $this->endereco = $_GET["endereco"];
            $this->estado = $_GET["estado"];
            $this->email = $_GET["email"];
            $this->usuario = $_GET["usuario"];
            $this->senha = $_GET["senha"];
            //Criar o comando SQL com parametros para insercao
            $smtp = $pdo->prepare("insert into cliente(codigo,nome,cpf,telefone,endereco,estado,email,usuario,senha) values(null, :nome, :cpf, :telefone, :endereco, :estado, :email, :usuario, :senha) ");
            //Executar o comando banco de dados passando os valores recebidos
            $smtp->execute(array(
                ':nome' => $this->nome,
                ':cpf' => $this->cpf,
                ':telefone' => $this->telefone,
                ':endereco' => $this->endereco,
                ':estado' => $this->estado,
                ':email' => $this->email,
                ':usuario' => $this->usuario,
                ':senha' => $this->senha
            ));
           
            //Testar se retornou algum resultado
            if ($smtp->rowCount() > 0) {

                header("location:./");//Retornar para o index.php
            }
        }else{
            header("location:./");//Retornar para o index.php
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
            $smtp = $pdo->prepare("select * from cliente where codigo = :codigo");

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