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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Pacotes</title>
    
    <!-- Google Fonts -->
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
  <body>
   <form action="pacotes.php" method="get">
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
<form action="CADASTRO.php" method="post">

       <button type="submit" class="w3-button w3-block w3-padding-large w3-orange w3-margin-bottom" name="salvar" onclick="document.getElementById('download').style.display='none'">Cadastrar</button>
</form>
    </div>
  </div>
</div>
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
                                    <li><a href="pacotes.php">R$</a></li>
                              
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">lingua: </span><span class="value">Português </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pacotes.php">Português</a></li>
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
                        <li><a href="index.php">Página Inicial</a></li>
                        <li><a href="loja.php">Loja</a></li>
                        <li class="active"><a href="pacotes.php">Pacotes Promocionais</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Pacotes Promocionais</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                
                <div class="col-md-12 text-center">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <h2>PACOTE DO DIA</h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images"><br><br><br>
                                    <div class="product-main-img">
                                        <img src="img/pacote1.jpg" style="cursor:zoom-in"
  onclick="document.getElementById('modal01').style.display='block'" alt="">
                                    </div>
                               
                                </div>
                            </div>
                             <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="img/pacote1.jpg" style="width:100%">
    </div>
  </div>
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">Pacote Legumes </h2>
                                    <div class="product-inner-price">
                                        <ins>R$20,00</ins>
                                    </div>    

                                        <button onclick="document.getElementById('download').style.display='block'" class="add_to_cart_button" type="submit"><i class="fa fa-cart-plus"></i> Comprar</button>
                                    
                                    <div class="product-inner-category">
                                        <p>Categoria: Legume</a>.</p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descrição</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descrição do Produto</h2>  
                                                <p>No pacote legumes você leva quatro produtos (Milho, ábobora, chuchu e batata) exelentes em um preço super acessivel. Não perca está oportunidade.</p>

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Avaliar</h2>
                                                <div class="submit-review">
                                                    <form action="pacotes.php">
                                                    <p><label for="name">Nome</label> <input required="" placeholder="Digite seu nome" name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input required="" placeholder="Digite seu e-mail" name="email" type="email"></p>
                                                   
                                                    <p><label for="review">Comentário</label> <textarea required="" name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input placeholder="Digite um comentário sobre o produto" type="submit"  value="Enviar"></p>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Pacotes da Semana</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacotedia2.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href="">Pacote frutas</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>R$20,00</ins> 
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacote3.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href="">Pacote Ferramentas</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>R$150,00</ins>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacote4.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
   
                                        </div>
                                    </div>

                                    <h2><a href="">Pacote de folhas</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>R$10,00</ins>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacote5.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href="">Pacote De Plantação</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>R$70,00</ins>
                                    </div>                            
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacote6.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href="">Pacote variado</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>R$10,0</ins>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacote7.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href="">Pacote salada</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>R$10,00</ins>
                                    </div>                            
                                </div>                                    
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


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