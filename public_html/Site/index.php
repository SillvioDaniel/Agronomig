<?php
header("Content-Type:Text/html; charset=utf8");
//Recuperar arquivo da classe
require_once "actlogin.php";

$validar = new Login;
if (isset($_GET['salvar'])){

    $validar->validar();
    $user = $_GET["usuario"];
}

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
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="CADASTRO.PHP"><i class="fa fa-user-plus"></i> Cadastro</a></li>
                            <li><a onclick="document.getElementById('download').style.display='block'"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Moeda: </span><span class="value">R$ </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">R$</a></li>
                                    
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">lingua: </span><span class="value">Português </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="loja.php">Português</a></li>
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
                        <h1><a href="index.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
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
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Página Inicial</a></li>
                        <li><a href="loja.php">Loja</a></li>
                        <li><a href="pacotes.php">Pacotes Promocionais</a></li>
                        <li><a href="contato.php">Contato</a></li>
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
<center><button class="w3-button w3-block" onclick="document.getElementById('download').style.display='block'" type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><b>Junte-se a nós</b></button>
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
<center><button  onclick="document.getElementById('download').style.display='block'" type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><b>Junte-se a nós</b></button>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="index.php" method="get">
<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide">Entrar</h2>
      <p>Entre na sua conta ou cadastre-se agora</p>
      
      <p><input class="w3-input w3-border" name="usuario"  type="text" placeholder="Digite seu nome de usuário" required=""></p>
      <p><input class="w3-input w3-border" name="senha" type="password" placeholder="Digite sua senha" required=""></p>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom" name="salvar" >Entrar</button>
      <script>

</script>

    </form>
<form action="CADASTRO.PHP" method="post">

       <button type="submit" class="w3-button w3-block w3-padding-large w3-orange w3-margin-bottom" name="salvar" onclick="document.getElementById('download').style.display='none'">Cadastrar</button>
</form>
    </div>
  </div>
</div>
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
                                                <p>Conosco você consegue se cadastrar gratuitamente e vender seus produtos! Basta baixar o formulário para começar a cadastrar seus produtos.</p>

                                                <form action="Agronomig.zip" method="post">

<div class="col-md-6 col-xs-6">
<center><button type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><b>Download </b><i class="fa fa-cloud-download"></i></button>
</div>
</form>
       

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
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 dias de retorno</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Frete gratuito</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Pagamentos seguros</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>Novos produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><b>Principais Produtos</b></h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/sacobatatas.jpg" alt="">
                                    <div class="product-hover">

                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'">Saco de Batatas</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>R$10,00</ins> <del>R$15,00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/bnadejamilho.jpg" alt="">
                                    <div class="product-hover">
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
                              
                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'">Bandeja de milho</a></h2>
                                <div class="product-carousel-price">
                                    <ins>R$5,00</ins> <del>R$10,00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/bandejademorango.png" alt="">
                                    <div class="product-hover">
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'">Bandeja de morangos</a></h2>

                                <div class="product-carousel-price">
                                    <ins>R$10,00</ins> <del>R$15,00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/bandejadecenoura.jpg" alt="">
                                    <div class="product-hover">
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'">Bandeja de cenoura</a></h2>

                                <div class="product-carousel-price">
                                    <ins>R$10,00</ins> <del>R$15,00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/bandejadetomatecereja.jpg" alt="">
                                    <div class="product-hover">
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'">Bandeja tomate cereja</a></h2>

                                <div class="product-carousel-price">
                                    <ins>R$10,00</ins> <del>R$20,00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/sementemaracuja.jpg" alt="">
                                    <div class="product-hover">
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
                      
                                    </div>
                                </div>
                                
                                <h2><a onclick="document.getElementById('download').style.display='block'">Semente de maracujá</a></h2>

                                <div class="product-carousel-price">
                                    <ins>R$20,00</ins> <del>R$25,00</del>
                                </div>                            
                            </div>
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
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b>Mais Vendidos</b></h2>
                        <a onclick="document.getElementById('download').style.display='block'" class="wid-view-more">Ver Todos</a>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/couve.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Couve</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$3,00</ins> <del>R$5,00</del> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/sementedegirassol.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Semente de girassol</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$20,00</ins> <del>R$25,00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/pa.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Pá</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$50,00</ins> <del>R$70,00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b> Promocionais</b></h2>
                        <a onclick="document.getElementById('download').style.display='block'" class="wid-view-more">Ver Todos</a>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/regrador.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Regador</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$43,00</ins> <del>R$50,00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/Mangueira1.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Mangueira</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$30,00</ins> <del>R$40,00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/cebola.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Cebola</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$2,00</ins> <del>R$1,50</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b>Novos</b></h2>
                        <a onclick="document.getElementById('download').style.display='block'" class="wid-view-more">Ver Todos</a>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/Alface.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Alface</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1.00</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/jabuticaba.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Jabuticaba</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$4.00</ins> <del>R$3,00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a onclick="document.getElementById('download').style.display='block'"><img src="img/chuchu.jpg" alt="" class="product-thumb"></a>
                            <h2><a onclick="document.getElementById('download').style.display='block'">Chuchu</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$7,00</ins> <del>R$10,00</del>
                            </div>                            
                        </div>
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
                        <p>É gratuito, basta baixar o formulário para começar a cadastrar seus produtos.</p>
                        <div class="newsletter-form">
                            <form action="Agronomig.zip" method="post">

<div class="col-md-12 col-xs-6">
<center><button type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white">Baixar </button>
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
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>