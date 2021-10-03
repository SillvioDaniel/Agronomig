<?php
//Puxando Info do Usuário
require_once "../inc/inicio_php_comprador.php";

//Puxando variavel de conexão
require_once "../inc/conexao.php";

    //Selecionar os pacotes
        $result_principais_pacotes = "SELECT * FROM estoque_pacotes WHERE quantidade >= 10 LIMIT 5;";
        $resultado_principais_pacotes = mysqli_query($conn, $result_principais_pacotes);
        $total_principais_pacotes = mysqli_num_rows ($resultado_principais_pacotes);

    //Selecionar o pacote principal
        $result_principal_pacote = "SELECT * FROM estoque_pacotes WHERE quantidade >= 1 LIMIT 1;";
        $resultado_principal_pacote  = mysqli_query($conn, $result_principal_pacote);
        $row_principal_pacote = mysqli_fetch_assoc($resultado_principal_pacote);
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   
     <div class="header-area" style="background-color: #996633">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li><a href="notificacao.php" class="w3-bar-item " title="Notificações"><i class="fa fa-bell"></i><span  class=" " ><?php echo " ".$row_notificacoes['count(ativa)'];?></span> Notificações</a>                 
                            <li><a href="configs.php"><i class="fa fa-gear"></i> Configurações</a></li>
                            <li><a href="../inc/sair.php"><i class="fa fa-close"></i> Sair</a></li>
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
                        <h1><a href="loja_login.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area" style="background-color: #996633">
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
                        <li><a href="loja_login.php"><i class='fa fa-shopping-cart'></i> Loja</a></li>
                        <li class = 'active'><a href="pacotes.php"><i class='fa fa-shopping-basket'></i> Pacotes Promocionais</a></li>
                        <li> <a href="historico.php"><i class='fa fa-calendar-check-o'></i>  Histórico de Compras</a></li>
                        <li><a href="conta.php"><i class='fa fa-user'></i>  Conta</a></li>
                        <li><a href="carrinho.php"><i class='fa fa-cart-plus'></i>  Carrinho</a></li>
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
                            <h2 class="related-products-title">PACOTE DO MOMENTO</h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images"><br><br><br>
                                    <div class="product-main-img">
                                        <img src="<?php echo "imagens_vendedor/".$row_principal_pacote['foto'];?>"  onclick="document.getElementById('modal01').style.display='block'" alt="">
                                    </div>
                               
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $row_principal_pacote['nome'];?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo "R$ ".number_format($row_principal_pacote['valor'],2);?></ins>
                                    </div>   
                                        <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?acao=add&codigo=".$row_principal_pacote['codigo_estoque'];?> <i class="fa fa-shopping-cart"></i> Comprar</a>
                                        <p>Categoria: Pacote Promocional</a>.</p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                         
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descrição do Produto</h2>  
                                                <p>No momento é o pacote mais consumido pelos usuários de nosso site. Tem se destacado pelo nível da qualidade do produto e também pela competência do vendedor.</p>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Pacotes da Semana</h2>
                            <div class="related-products-carousel">


                            <!--Apresentando Principais Pacotes-->
                                <?php
                                  //Loop para apresentar todos os resultados
                                    while($rows_principais_pacotes = mysqli_fetch_array($resultado_principais_pacotes)){
                                ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo "imagens_vendedor/".$rows_principais_pacotes['foto']; ?>" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <?php echo " href=carrinho.php?acao=add&codigo=".$rows_principais_pacotes['codigo_estoque'];?> <i class="fa fa-shopping-cart"></i> Comprar</a>

                                        </div>
                                    </div>

                                    <h2><a href=""><?php echo $rows_principais_pacotes['nome']; ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?php echo "R$ ".number_format($rows_principais_pacotes['valor'],2); ?></ins> 
                                    </div> 
                                </div>
                            <?php } ?>


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
                        <p>Comece a cadastrar seus produtos na loja agora mesmo.</p>
                        <div class="newsletter-form">
                            <form action="../inc/sair.php" method="post">
                            <div class="col-md-12 col-xs-6">
                            <center><button type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><i class="fa fa-random fa-fw w3-margin-right w3-xxlarge "></i> Trocar </button>
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