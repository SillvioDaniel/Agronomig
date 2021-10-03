<?php
//Evitar Bug's
  require_once "inc/inicio_php_base.php";

//Puxando variavel de conexão
  require_once "inc/conexao.php";

  //Selecionar Principais Produtos
    $result_principais_produtos = "SELECT * FROM estoque_produto WHERE quantidade > 100 limit 10;";
    $resultado_principais_produtos = mysqli_query($conn, $result_principais_produtos);
    $total_principais_produtos = mysqli_num_rows ($resultado_principais_produtos);
  //Selecionar os produtos mais vendidos
    $result_top_produtos = "SELECT * FROM produtos_mais_vendidos WHERE quantidade >= 1;";
    $resultado_top_produtos = mysqli_query($conn, $result_top_produtos);
    $total_top_produtos = mysqli_num_rows ($resultado_top_produtos);

  //Selecionar Novos Produtos
    $result_novos_produtos = "SELECT * FROM produto ORDER BY id DESC limit 3;";
    $resultado_novos_produtos = mysqli_query($conn, $result_novos_produtos);
    $total_novos_produtos = mysqli_num_rows ($resultado_novos_produtos);
  //Selecionar os pacotes com maior quantidade
    $result_principal_pacote = "SELECT * FROM estoque_pacotes WHERE quantidade >= 1 limit 4;";
    $resultado_principal_pacote  = mysqli_query($conn, $result_principal_pacote);
    $row_principal_pacote = mysqli_fetch_assoc($resultado_principal_pacote);
?>


<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig</title>
    
    <!-- Google Fonts -->
    
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
   
    <div class="header-area" style="background-color: #996633">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                    </div>
                </div>
         <style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 
</style>
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
</style>     <script type="text/javascript">
  function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";

}
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    }
  });
})
</script>  
                <div class="col-md-4" style="background-color: #996633">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline" style="cursor: pointer;">
                          <li><a style="color: white;text-decoration:none;" href="tutorial"><i class="fa fa-info-circle"></i> Tutorial</a></li>
                            <li><a style="color: white;text-decoration:none;" href="cadastrar.php"><i class="fa fa-user-plus"></i> Cadastro</a></li>

                            <li><a style="color: white;text-decoration:none;" onclick="document.getElementById('download').style.display='block'"><i class="fa fa-user"></i> Login</a></li>
                                    
                                </ul>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/alogo.png"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area" style="background-color:  #996633;
">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Alternar Navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class=" navbar-collapse collapse" style="background-color: #996633">
                    <ul class="nav navbar-nav">
                        <li class="" style="background-color: #392613"><a href="index.php"><i class='fa fa-home'></i> Página Inicial</a></li>
                        <li><a href="loja.php"><i class='fa fa-shopping-cart'></i>  Loja</a></li>
                        <li><a href="pacotes.php"><i class='fa fa-shopping-basket'></i> Pacotes Promocionais</a></li>
                        <li><a href="contato.php"><i class='fa fa-user'></i>  Contato</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Nosso Objetivo</h2>
                                                <p>Nosso objetivo é trazer a agronomia para o mercado, facilitando a busca de encomendas e compras de empresas e pessoas com plantações de qualidade!</p>
                                               
                                                <div class="col-md-6 col-xs-6">
                                                <center><button  onclick="document.getElementById('download').style.display='block'" type="submit" class="btn                                                 btn-success btn-block" style="font-size:24px;color:white; width: 250px; background-color: #996633"><b>Junte-se a nós</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Cadastre-se</h2>
                                                <p>Com a gente você é feliz do seu jeito, podendo fazer suas compras fresquinhas de uma maneira simples, fácil e prático.<br>
                                                Cadastre-se, é gratis.</p>
                                            

<div class="col-md-6 col-xs-6">
<center><button  onclick="document.getElementById('download').style.display='block'" type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white; width: 250px; background-color: #996633"><b>Junte-se a nós</b></button>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<form action="classe/ActLogin.php" method="POST">
<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity" style="z-index: 100234234;">
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
<form action="cadastrar.php" method="post">

       <button style="vertical-align:middle; width: 100%;" type="submit" class=" button w3-orange w3-margin-bottom" name="salvar" onclick="document.getElementById('download').style.display='none'"><span style="color: white;">Cadastrar</span></button>
</form>
    </div>
  </div>
</div>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #f4511e;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  color: white;
}

.button:hover span {
  padding-right: 15px;
  color: white;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
  color: white;
}
</style>
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
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Seja um Vendedor</h2>
                                                <p>Conosco você consegue vender seus produtos de modo simples e prático! Basta realizar o cadastro para começar a vender seus produtos.</p>

                                               

<div class="col-md-6 col-xs-6">
<center><button type="submit" onclick="document.getElementById('download').style.display='block'" class="btn btn-success btn-block" style="font-size:24px;color:white; width: 250px; background-color: #996633"><b>Junte-se a nós </b></button>
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

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
  
                <div class="col-md-3 col-sm-6" title="Reembolso de no máximo 30 dias">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 dias de retorno</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" title="Tenha o controle dos produtos que contem ou não agrotóxicos">
                    <div class="single-promo">
                        <i class="fa fa-ban"></i>
                        <p>Sem Agrotóxicos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" title="Não tenha medo de efetuar pagamentos em nossa plataforma">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Pagamentos seguros</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" title="Fique de olho, sempre tem produtos novos em nossa loja">
                    <div class="single-promo">
                        <i class="fa fa-cart-plus"></i>
                        <p>Novos produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    <style type="text/css">
   .single-promo:hover { 
  background-color: transparent;
  border-top: transparent;
  border-bottom: transparent;
  border-left: transparent;
  border-right: transparent;
}

    </style>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><b>Principais Produtos</b></h2>
                        <div class="product-carousel">

                          <!--Apresentando Principais Produtos-->
                          <?php
                            //Loop para apresentar todos os resultados
                              while($rows_principais_produtos = mysqli_fetch_array($resultado_principais_produtos)){
                          ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo "login/imagens_vendedor/".$rows_principais_produtos['foto']; ?>" style="width:220px; height: 200px" alt="">
                                    <div class="product-hover">

                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'"><?php echo $rows_principais_produtos['nome']; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo "R$ ".number_format($rows_principais_produtos['valor'],2); ?></ins> <del><?php echo "R$ ".number_format($rows_principais_produtos['valor']*1.37,2); ?></del>
                                </div> 
                            </div>
                            
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Parcerias</h2>
                        <div class="brand-list">
                            <img src="img/cotemig.png" alt="">
                            <img src="img/fabiola.jpg" alt="">
                            <img src="img/oie_transparent.png" alt="">
                            <img src="img/services_logo__4.jpg" alt="">
                            <img src="img/services_logo__1.jpg" alt="">
                            <img src="img/services_logo__2.jpg" alt="">
                            <img src="img/services_logo__3.jpg" alt="">
                            <img src="img/services_logo__4.jpg" alt="">                            
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    <style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 

</style>
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b>Mais Vendidos</b></h2>
                        <a onclick="document.getElementById('download').style.display='block'" class="wid-view-more" style="background-color: #996633; cursor: pointer;">Ver Todos</a>

                        <!--Apresentando Produtos Mais Vendidos-->
                        <?php
                            //Loop para apresentar todos os resultados
                              while($rows_top_produtos = mysqli_fetch_array($resultado_top_produtos)){
                        ?>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="<?php echo "login/imagens_vendedor/"; echo $rows_top_produtos['foto']; ?>" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'"><?php echo $rows_top_produtos['nome']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo "R$ ".number_format($rows_top_produtos['valor'],2); ?></ins> <del><?php echo "R$ ".number_format($rows_top_produtos['valor']*1.22,2); ?></del>
                            </div>                            
                        </div>
                        <?php } ?>


                    </div>
                </div>
                <div class="col-md-4">
                  <div class="single-product-widget">
                        <h2 class="product-wid-title"><b> Promocionais</b></h2>
                        <a onclick="document.getElementById('download').style.display='block'" class="wid-view-more" style="background-color: #996633; cursor: pointer;">Ver Todos</a>

                    <!--Apresentando Produtos Mais Vendidos-->
                        <?php
                            //Loop para apresentar todos os resultados
                              while($rows_principal_pacote = mysqli_fetch_array($resultado_principal_pacote)){
                        ?>
                    
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="<?php echo "login/imagens_vendedor/"; echo $rows_principal_pacote['foto']; ?>" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'"><?php echo $rows_principal_pacote['nome']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo "R$ ".number_format($rows_principal_pacote['valor'],2); ?></ins> <del><?php echo "R$ ".number_format($rows_principal_pacote['valor']*1.22,2); ?></del>
                            </div>                            
                        </div>
                    

                  <?php }?>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b>Novos</b></h2>
                        <a onclick="document.getElementById('download').style.display='block'" class="wid-view-more" style="background-color: #996633; cursor: pointer;">Ver Todos</a>

                        <!--Apresentando Produtos Mais Vendidos-->
                        <?php
                            //Loop para apresentar todos os resultados
                              while($rows_novos_produtos = mysqli_fetch_array($resultado_novos_produtos)){
                        ?>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="<?php echo "login/imagens_vendedor/"; echo $rows_novos_produtos['foto']; ?>" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'"><?php echo $rows_novos_produtos['nome']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo "R$ ".number_format($rows_novos_produtos['valor'],2); ?></ins> <del><?php echo "R$ ".number_format($rows_novos_produtos['valor']*1.18,2); ?></del>
                            </div>                            
                        </div>
                        <?php } ?>


                   </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
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
                <center>
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
                        <h2 class="footer-wid-title">Seja um vendedor</h2>
                        <p>É gratuito, basta realizar o cadastro para começar a vender seus produtos.</p>
                        <div class="newsletter-form">
                          
<div class="col-md-12 col-xs-6">
<center><button onclick="document.getElementById('download').style.display='block'" type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white">Começar </button>
</div>

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
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>