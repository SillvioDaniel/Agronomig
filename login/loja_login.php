<?php 
//Puxando Info do Usuário
require_once "../inc/inicio_php_comprador.php";

//Puxando variavel de conexão
require_once "../inc/conexao.php";

//Verificar se está sendo passado na URL a página atual, senao é atribuido a página
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os estoques da tabela
$result_estoque = "SELECT * FROM estoque_produto WHERE tipo != 'Pacote Promocional' AND quantidade > 0";
$resultado_estoque = mysqli_query($conn, $result_estoque);

//Contar o total de estoque_produto
$total_estoques = mysqli_num_rows($resultado_estoque);

//Seta a quantidade de estoques por pagina
$quantidade_pg = 12;

//Calcular o número de páginas necessárias para apresentar os estoques
$num_pagina = ceil($total_estoques/$quantidade_pg);

//Calcular o inicio da visualizacao
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os estoques a serem apresentado na página
$result_estoques = "SELECT * FROM estoque_produto WHERE tipo != 'Pacote Promocional' AND quantidade > 0 limit $inicio, $quantidade_pg ;";
$resultado_estoques = mysqli_query($conn, $result_estoques);
$total_estoques = mysqli_num_rows ($resultado_estoques);

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Loja</title>
    
    <!-- Google Fonts -->
      <link rel="shortcut icon" href="img/logomarca.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <li class = 'active'><a href="loja_login.php"><i class='fa fa-shopping-cart'></i> Loja</a></li>
                        <li><a href="pacotes.php"><i class='fa fa-shopping-basket'></i> Pacotes Promocionais</a></li>
                        <li><a href="historico.php"><i class='fa fa-calendar-check-o'></i>  Histórico de Compras</a></li>
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
                        <h2>Loja</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style> 
input[type=text] {
  width: 230px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
  color:  #29a329;
  border-color:  #29a329;
  
}
</style>
    
  <div class="w3-col m7">
    
      
     <div class="w3-card w3-round w3-white w3-hide-small">
      
        <div class="single-product-area">
            <div class="col-md-12">
                        <div class="row">
                            <!--Looping para apresentar todos os produtos-->
                        <?php while ($rows_estoques = mysqli_fetch_assoc($resultado_estoques)){ ?>

                            <div class="col-sm-4 col-md-2">

                                 <div class="thumbnail">
                                    <img src="<?php echo "imagens_vendedor/"; echo $rows_estoques['foto']; ?>" alt="..." style="width:200px; height: 200px">
                                    <div class="caption text-center">
                                        <h3 style="color: #00b33c"><?php echo $rows_estoques['nome']; ?></h3>
                                        <b>Quantidade: <?php echo $rows_estoques['quantidade']; ?></b></br>
                                        <b>R$<?php echo number_format($rows_estoques['valor'],2); ?></b>
                                        <p><a style="background-color:  #996633" onclick="adicionar_produto()" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" <?php echo " href=carrinho.php?acao=add&codigo=".$rows_estoques['codigo_estoque'].">"?><i class="fa fa-cart-plus"></i> Comprar Produto</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>   
                </div>  
                                <?php 
                        //Verificar a pagina anterior e posterior
                    $pagina_anterior = $pagina - 1;
                    $pagina_posterior = $pagina + 1;
                     ?>
                        <nav class="text-center" aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <?php  
                                        if($pagina_anterior != 0){?>
                                    <a href="loja_login.php?pagina=<?php echo $pagina_anterior; ?>">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                        <?php }else{?>
                                        <span aria-hidden="true">&laquo;</span>
                                    <?php }    ?>
                                </li>
                                <?php 
                                    //Apresentar a paginação
                                for($i = 1; $i < $num_pagina +1; $i++)
                                {?>
                                    <li><a href="loja_login.php?pagina=<?php echo $i; ?>"><?php echo $i;?></a></li>
                                    <?php } ?>
                                <li>
                                    <?php
                                    if($pagina_posterior <= $num_pagina){ ?>
                                        <a href="loja_login.php?pagina=<?php echo $pagina_posterior; ?>"?>
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                <?php }else{ ?>
                            <span aria-hidden="true">&raquo;</span>
                    <?php }  ?>
                                </li>
                            </ul>
                            </nav>                              
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
                            <center><button type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><i class="fa fa-random fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i> Trocar </button>
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