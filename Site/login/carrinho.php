<?php  
header("Content-Type:Text/html; charset=utf8");

include_once ("conexao.php");
$codigo_estoque = $_GET['codigo_estoque'];
$result_estoques = "SELECT * FROM estoque where codigo = '$codigo_estoque'";
$resultado_estoques = mysqli_query($conn, $result_estoques);
$row_estoques = mysqli_fetch_assoc($resultado_estoques);

//Recuperar arquivo da classe
require_once "venda.php";
//Criar um objeto do tipo cliente
$cliente = new Clientes();
//Chamar a funcao apra inserir testando se foi clicado no botao salvar
if (isset($_GET['salvar'])){
    $quantidade = $_GET["total"];

    $total = $_GET["valor"];

    $total = $total * $quantidade;

    $_GET["total"] = $total;
    $_GET["quant"] = $quantidade;


    $cliente->inserir();
}

$p1 = 26;
$p2 = 30;


//Loginnnnn
$login = $_GET["tx"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Carrinho</title>
    
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
                                    <li><a href="carrinho.php">R$</a></li>
                              
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">lingua: </span><span class="value">Português </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="carrinho.php">Português</a></li>
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
                        <span class="sr-only">Alternar Navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                         <?php echo "<li><a href=LOGIN.php?tx=".$login.">Loja</a></li>"?>
                        <?php echo "<li><a href=pacotes.php?tx=".$login.">Pacotes Promocionais</a></li>"?>
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
                        <h2>Carrinho</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="get" action="carrinho.php">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-name">Produto</th>
                                            <th class="product-price">Preço</th>
                                            <th class="product-quantity">Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <?php echo "<li><a href=LOGIN.php?tx=".$login.">X</a></li>"?>
                                            </td>

                                            <td class="product-name">
                                                <p id="produto"><?php echo $row_estoques['nome']; ?></p> 
                                            </td>

                                            <td class="product-price">
                                                <p id="preco">R$ <?php echo $row_estoques['valor']; ?></p> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">

                                                    <input type="number" name="total" size="4" class="input-text total text" title="total" value="1" min="0" step="1" max="<?php echo $row_estoques['quantidade']; ?>"><b style="color: red"></b>


                                                </div>
                                            </td>
                                        </tr>

                                        <?php echo "<p>Data da Transição: ".date("d/m/Y")?></br>
                                        
                                        
                                        

                                            <input type="" style="display:none"  value="<?php 
                                                $total = date("Y-m-d");
                                                echo $total?>" name="data">

                                                <input type="" style="display:none" value="<?php 
                                                echo $row_estoques['valor'];?>" name="valor">

                                                <input type="" style="display:none" value="<?php 
                                                echo $row_estoques['vendedores_cpf'];?>" name="vendedores_cpf">

                                                <input type="" style="display:none" value="<?php 
                                                echo $row_estoques['produtos_codigo'];?>" name="produtos_codigo">

                                                <input type="" style="display:none" value="<?php 
                                                echo $login;?>" name="cliente_codigo">

                                            
                                            


                                        <tr>
                                            <td class="actions" colspan="6">
                                                
                                                <input type="submit" value="Confirmar Compra" name="salvar" class="checkout-button button alt wc-forward" onclick="myFunction()">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
<script>
function myFunction() {
    alert("Compra realizada com sucesso!");
}
</script>
                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>Você pode estar interessado...</h2>
                                <ul class="products">
                                    
                                    
                                    <li class="product">
                                        <a >
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/pacotedia2.jpg">
                                            <h3>Pacote de frutas</h3>
                                            <span class="price"><span class="amount">R$ 20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p1."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>
                                    </li>

                                    <li class="product">
                                        <a >
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/pacote5.jpg">
                                            <h3>Pacote Plantar</h3>
                                            <span class="price"><span class="amount">R$ 70.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" <?php echo " href=carrinho.php?tx=".$login."&codigo_estoque=".$p2."target=_self>"?><i class="fa fa-shopping-cart"></i> Comprar</a>
                                    </li>
                                </ul>
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