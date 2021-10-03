<?php  
//Evitar Bug's
require_once "inc/inicio_php_base.php";
//Recuperar arquivo da classe
require_once "classe/CadastroClasse.php";

//Criar um objeto do tipo vendedor
$vendedor = new Cadastro();
//Variaveis para validar os campos
$erro_cpf = "";
$erro_usuario = "";
//Chamar a funcao para inserir o cadastro
if (isset($_POST['enviar'])){
    //Variaveis para o critério do select SQL
    $cpf = $_POST["cpf"];
    $usuarioo = $_POST["usuario"];

    //Recuperar arquivo da classe
    include_once ("inc/conexao.php");

    //Select para buscar se já existe o cpf
      $result_cpf_vendedor = "SELECT count(cpf) FROM vendedor WHERE cpf = '$cpf' AND ativo = 1";
      $resultado_cpf_vendedor = mysqli_query($conn, $result_cpf_vendedor);
      $row_cpf_vendedor = mysqli_fetch_assoc($resultado_cpf_vendedor);
    //Select para buscar se já existe o usuario no VENDEDOR
      $result_usuario_vendedor = "SELECT count(usuario) FROM vendedor WHERE usuario = '$usuarioo'";
      $resultado_usuario_vendedor = mysqli_query($conn, $result_usuario_vendedor);
      $row_usuario_vendedor = mysqli_fetch_assoc($resultado_usuario_vendedor);
    //Select para buscar se já existe o usuario no COMPRADOR
      $result_usuario_cliente = "SELECT count(usuario) FROM cliente WHERE usuario = '$usuarioo'";
      $resultado_usuario_cliente = mysqli_query($conn, $result_usuario_cliente);
      $row_usuario_cliente = mysqli_fetch_assoc($resultado_usuario_cliente);
    //Select para buscar se já existe o usuario no ADM
      $result_usuario_adm = "SELECT count(login) FROM adm WHERE login = '$usuarioo'";
      $resultado_usuario_adm = mysqli_query($conn, $result_usuario_adm);
      $row_usuario_adm = mysqli_fetch_assoc($resultado_usuario_adm);
    //Select para buscar se já existe o cpf
      $result_cpf_vendedor_desativado = "SELECT count(cpf) FROM vendedor WHERE cpf = '$cpf' AND ativo = 0";
      $resultado_cpf_vendedor_desativado = mysqli_query($conn, $result_cpf_vendedor_desativado);
      $row_cpf_vendedor_desativado = mysqli_fetch_assoc($resultado_cpf_vendedor_desativado);


    //Validação de CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf_numeros{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
    if($cpf_numeros{$c} != $d){
        $erro_cpf_invalido = "Este CPF é inválido";
    }}

    //Verificar se á repetição de dados ou Invalidade
    if(preg_match('/(\d)\1{10}/', $cpf_numeros) && strlen($cpf_numeros) != 11){
        $erro_cpf_invalido = "Este CPF é inválido";
    }
    else if(preg_match('/(\d)\1{10}/', $cpf_numeros) || strlen($cpf_numeros) != 11) {
        $erro_cpf_invalido = "Este CPF é inválido";
    }
    else if($row_cpf_vendedor['count(cpf)']>=1 && ($row_usuario_vendedor['count(usuario)']>=1 || $row_usuario_cliente['count(usuario)']>=1 || $row_usuario_adm['count(login)']>=1)){
      $erro_usuario = "Este Usuario já está Cadastrado";
        $erro_cpf = "Este CPF já está sendo utilizado";
    }
    else if($row_cpf_vendedor['count(cpf)']>=1){
        $erro_cpf = "Este CPF já está sendo utilizado";
    }
    else if ($row_usuario_cliente['count(usuario)']>=1 || $row_usuario_vendedor['count(usuario)']>=1 || $row_usuario_adm['count(login)']>=1) {
        $erro_usuario = "Este Usuario já está Cadastrado";
    }else{

      //Verificando se existe usário desativado
      if ($row_cpf_vendedor_desativado['count(cpf)']>=1) {
        $vendedor->recriar_vendedor();
      }else{
        $vendedor->inserir_vendedor();
      }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Cadastro</title>
    
    <!-- Google Fonts -->
      <link rel="shortcut icon" href="img/logomarca.png">
 <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/logomarca.png">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
/*the container must be positioned relative:*/

.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
  <style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
  </head>
  <body>
   <!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
<style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 

</style>
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
    <div class="header-right">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">

                        <ul>

                            <li  style="cursor: pointer;"><a onclick="document.getElementById('download').style.display='block'"><i class="fa fa-user"></i> Login</a></li>
                            <li style="cursor: pointer;"><a href="index.php"><i class="fa fa-close"></i> Voltar</a></li>
                        </ul>
                    </div>
                </div>

                                <form action="classe/ActLogin.php" method="POST">
<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity" style="z-index: 100;">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" style="cursor: pointer;" class="fa fa-remove w3-xlarge  w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide">Entrar</h2>
      <p>Entre na sua conta ou cadastre-se agora</p>
      <center><b style="color: red; font-size: 20px;">
      <?php 
      //Verificando se existe o acesso invalido
    if (isset($_SESSION['login_invalido'])){
        echo $_SESSION['login_invalido'];
        unset($_SESSION['login_invalido']);
    }
       ?>
      </b></center>
        <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="usuario" placeholder="  " required="">
      <label style="margin-left: 20px;">Usuário</label>
  </div>
    </div>
         <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="password" class="form-control" name="senha" placeholder="  " required="">
      <label style="margin-left: 20px;">Senha</label>
  </div>
    </div>
      <button type="submit" style="vertical-align:middle; width: 100%;" class=" button w3-green w3-margin-bottom" name="salvar" ><span>Entrar </span></button>
    </form>
<form action="cadastrar.php" method="POST">

       <button type="submit" class="w3-button w3-block w3-padding-large w3-orange w3-margin-bottom" onclick="document.getElementById('download').style.display='none'">Cadastrar</button>
</form>
    </div>
  </div>
</div>
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
  
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Cadastro de Vendedor <i class="fa fa-dollar 
"></i></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="single-sidebar">
                        
   <div class="container">
<div class="w3-main" style="margin-left:200px;margin-right: 200px;margin-top:s43px;">
<style type="text/css">
   input[type="text"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}
 input[type="password"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}
   input[type="date"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}
 input[type="email"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}

input[type="text"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="password"] {
  padding-left: 40px;
}
input[type="password"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="text"] {
  padding-left: 40px;
}

input[type="email"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="date"] {
  padding-left: 40px;
}
input[type="date"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="email"] {
  padding-left: 40px;
}



.inputWithIcon {
  position: relative;
}

.inputWithIcon i {
  position: absolute;
  left: 0;
  top: 15px;
  padding: 9px 8px;
  color: #aaa;
  transition: 0.3s;
}

.inputWithIcon input[type="text"]:focus + i {
  color: dodgerBlue;
}
.inputWithIcon input[type="password"]:focus + i {
  color: dodgerBlue;
}
.inputWithIcon input[type="date"]:focus + i {
  color: dodgerBlue;
}
.inputWithIcon input[type="email"]:focus + i {
  color: dodgerBlue;
}

.inputWithIcon.inputIconBg i {
  background-color: #aaa;
  color: #fff;
  padding: 9px 4px;
  border-radius: 4px 0 0 4px;
}

.inputWithIcon.inputIconBg input[type="text"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
.inputWithIcon.inputIconBg input[type="password"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
.inputWithIcon.inputIconBg input[type="date"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
.inputWithIcon.inputIconBg input[type="email"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
</style>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
    <style type="text/css">
    .label-float{
  position: relative;
  padding-top: 10px;
}

.label-float input{
  border: 1px solid lightgrey;
  border-radius: 5px;
  outline: none;
  min-width: 250px;
  padding: 15px 20px;
  font-size: 16px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  -webkit-appearance:none;
}

.label-float input:focus{
  border: 2px solid #DodgerBlue;
}

.label-float input::placeholder{
  color:transparent;
}

.label-float label{
  pointer-events: none;
  position: absolute;
  top: calc(50% - 8px);
  left: -10px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  background-color: white;
  padding: 5px;
  box-sizing: border-box;
}

.label-float input:required:invalid + label{
  color: black;
}
.label-float input:focus:required:invalid{
  border: 1px solid #ff6666;
}
.label-float input:required:invalid + label:before{
  content: '*';
}
.label-float input:focus + label,
.label-float input:not(:placeholder-shown) + label{
  font-size: 15px;
  top: 0;
  color: DodgerBlue;
}

</style>
 <div class="w3-container">

    <h3>Preencha todos os campos abaixo:</h3>
     <br>
  <form action="vendedor.php" method="POST">


      <script>
    window.onload = function(){
            var selectBox = document.getElementById("meuselect");

            //abaixo crio um evento com javascript para quando haver mudança
            selectBox.addEventListener("change", function(){
                //sua função aqui...
            });
    }
</script>

    <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="nome" placeholder="  " maxlength="30" required="">
      <label style="margin-left: 20px;">Nome Completo</label>
  </div>
    </div>
    <center><b style="color: red">
      <?php 
        echo "".$erro_cpf;
       ?>
      </b></center>
        <div class="form-group">
            <div class="label-float">
          <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="cpf" placeholder="  " maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required="">
          <label style="margin-left: 20px;">CPF</label>
      </div>
        </div>

      <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="banco" placeholder="  " maxlength="30" required="">
      <label style="margin-left: 20px;">Banco</label>
  </div>
    </div>

      <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="agencia" placeholder="  " max="999999" required="">
      <label style="margin-left: 20px;">Agencia</label>
  </div>
    </div>

    <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="conta" placeholder="  " max="9999999" required="">
      <label style="margin-left: 20px;">Conta</label>
  </div>
    </div>

        <div class="form-group">
            <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="telefone" placeholder="  " maxlength="13" OnKeyPress="formatar('##-#####-####', this)" required="">
      <label style="margin-left: 20px;">Telefone</label>
  </div>
    </div>
          
    <div class="form-group">
         <div class="label-float">
      <input id="cep" style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="cep" placeholder="  " maxlength="120" required="">
      <label style="margin-left: 20px;">CEP</label>
  </div>
    </div>

    <div class="form-group">
         <div class="label-float">
      <input id="rua" style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="endereco" placeholder="  " maxlength="120" required="">
      <label style="margin-left: 20px;">Rua</label>
  </div>
    </div>
    <div class="form-group">
         <div class="label-float">
      <input id="bairro" style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="bairro" placeholder="  " maxlength="120" required="">
      <label style="margin-left: 20px;">Bairro</label>
  </div>
    </div>
    <div class="form-group">
         <div class="label-float">
      <input id="cidade" style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="cidade" placeholder="  " maxlength="120" required="">
      <label style="margin-left: 20px;">Cidade</label>
  </div>
    </div>
       <div class="form-group">
             <div class="label-float">
      <input id="uf" style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="estado" placeholder="  " maxlength="2" required="">
      <label style="margin-left: 20px;">Estado</label>
  </div>
    </div>
    <div class="form-group">
             <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px " type="email" class="form-control" name="email" placeholder="  " required="">
            <label style="margin-left: 20px;">E-mail</label>
  </div>
    </div>
    <center><b style="color: red">
      <?php 
        echo "".$erro_usuario;
       ?>
      </b></center>
    <div class="form-group">
             <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="usuario" placeholder="  " required="">
            <label style="margin-left: 20px;">Usuário</label>
  </div>
    </div>
    <div class="form-group">
             <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="password" class="form-control" name="senha" placeholder="  " required="">
            <label style="margin-left: 20px;">Senha</label>
  </div>
    </div>


 
    <center>
        <div class="col-md-12"> 
    <div class="checkbox">
 
    </div>
    <div class="col-md-6">
    <button type="submit" class="btn btn-success"  style="width: 50%" name="enviar"><i class="fa fa-user-plus" ></i> Cadastrar</button><br><br>
    </div>
    <div class="col-md-6">
    </form>
    <form action="index.php">
    <button type="submit" class="btn btn-danger" style=" width: 50%"><i class="fa fa-close"></i> SAIR</button>
    </form>
</div>
</div>
</div>


  </form>
    <script>
function myFunction() {
    alert("Cadastrado com Sucesso, Seja Bem Vindo!");
}
</script>
</div>
        

                                            


                                        </div>
                                    

                                    </div>

                                </div>

                              

                                        


                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>
                 
                

   




    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><img src="img/fooder.png"></h2>
                       
                    </div>
                </div>
                
                <div class="col-md-1 col-sm-3">
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li>Legumes</li>
                            <li>Frutas</li>
                            <li>Folhas</li>
                            <li>Sementes</li>
                            <li>Verduras</li>
                            <li>Ferramentas</li>
                        </ul>                        
                    </div>
                </div>

                <div class="col-md-1 col-sm-3">
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Seja um comprador</h2>
                         <p>É gratuito, basta realizar o cadastro para começar a vender seus produtos.</p>
                        <div class="newsletter-form">
         </form>                 
<div class="col-md-12 col-xs-6"><form action="cadastrar.php">
<center><button  type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white">Começar </button>
</div>
</form>
<br><br><br>
                            
                        <div class="footer-social"><h1>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-youtube"></i>
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-pinterest"></i>
                        </h1>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 Agronomig. Todos os direitos reservados. Codificado por <a href="contato.php">Equipe Agronomig</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
   <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Script para maskara nos input-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>
<script>
  // selecionando o documento inteiro, aguarda o carregamento completo da página
  $(document).ready(function(){
    $('#cep').mask("99.999-999")
    $('#cep').change(function(){
      var cep = $(this).val().replace(/\D/g, '');
      $.getJSON("https://viacep.com.br/ws/" + cep +"/json/", function(dados){
        if (!("erro" in dados)) {
          $("#rua").val(dados.logradouro);
          $("#bairro").val(dados.bairro);
          $("#cidade").val(dados.localidade);
          $("#uf").val(dados.uf);

        }
      })
      
    });
  });


</script>