<?php
header("Content-Type:Text/html; charset=utf8");

$login = $_GET["tx"];

$p1 = 29;
$p2 = 26;
$p3 = 27;
$p4 = 28;
$p5 = 30;
$p6 = 31;
$p7 = 32;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Agronomig | Pacotes</title>
    
    <!-- Google Fonts -->
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
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a <?php echo "href=conta.php?tx=".$login.""?>><i class="fa fa-user"></i> Minha Conta</a></li>
                            <li><a href="../index.php"><i class="fa fa-close"></i> Sair</a></li>
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
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">lingua: </span><span class="value">Portugu??s </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pacotes.php">Portugu??s</a></li>
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
                        <h1><a <?php echo " href=LOGIN.php?tx=".$login.""?>><img src="img/logo.png"></a></h1>
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
                        <span class="sr-only">Alternar Navega????o</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <?php echo "<li><a href=LOGIN.php?tx=".$login.">Loja</a></li>"?>
                        <?php echo "<li class = 'active'><a href=pacotes.php?tx=".$login.">Pacotes Promocionais</a></li>"?>
                        <?php echo "<li><a href=conta.php?tx=".$login.">Conta</a></li>"?>
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
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">Pacote Legumes </h2>
                                    <div class="product-inner-price">
                                        <ins>R$20,00</ins>
                                    </div>   
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p1."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>
                                        <p>Categoria: Legume</a>.</p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descri????o</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descri????o do Produto</h2>  
                                                <p>No pacote legumes voc?? leva quatro produtos (Milho, ??bobora, chuchu e batata) excelentes em um pre??o super acess??vel. N??o perca est?? oportunidade.</p>

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
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p2."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>

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
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p3."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>

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
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p4."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>
   
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
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p5."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href="">Pacote De Planta????o</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>R$70,00</ins>
                                    </div>                            
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/pacote6.jpg" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p6."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>

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
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link"<?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p7."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>

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
                        <p>?? gratuito, basta baixar o formul??rio para come??ar a cadastrar seus produtos.</p>
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
                        <p>&copy; 2018 Agronomig. Todos os direitos reservados. Codificado por <a href="../contato.php">Equipe Agronomig</a></p>
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