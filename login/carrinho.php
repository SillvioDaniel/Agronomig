<?php  
//Puxando Info do Usuário
require_once "../inc/inicio_php_comprador.php";

//Evitando Bugs
if (!isset($_SESSION['carrinho'])) {
    //Puxando o codigo do estoque/produto
    $_SESSION['carrinho'] = array();
}

//Adiciona Produto
if(isset($_GET['acao'])){
    //Adicionar Carrinho
    if ($_GET['acao'] == 'add') {
        $codigo = intval($_GET['codigo']);
        if (!isset($_SESSION['carrinho'][$codigo])) {
            $_SESSION['carrinho'][$codigo] = 1;
        }else{
            $_SESSION['carrinho'][$codigo] += 1;
        }
    }
    //Remover do Carrinho
    if($_GET['acao'] == 'del'){
        $codigo = intval($_GET['codigo']);
        if (isset($_SESSION['carrinho'][$codigo])) {
            unset($_SESSION['carrinho'][$codigo]);
        }
    }
}

//Recuperar arquivo da classe
require_once "../classe/ProdutoClasse.php";
//Criar um objeto do tipo Produto
$produto = new Produto();
//Chamar a funcao para inserir a venda
if (isset($_GET['salvar'])){
    $produto->inserir_venda();
    //Informações para o boleto
    
    header("location:boleto/boleto_cef.php");
}
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
   <style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 

</style>
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO--><style type="text/css">
      li:hover{
        background-color: #392613; color: white;
      }
      a:hover{
        color: white;
      }
    </style>
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
                        <li><a href="pacotes.php"><i class='fa fa-shopping-basket'></i> Pacotes Promocionais</a></li>
                        <li><a href="historico.php"><i class='fa fa-calendar-check-o'></i>  Histórico de Compras</a></li>
                        <li><a href="conta.php"><i class='fa fa-user'></i>  Conta</a></li>
                        <li  class = 'active'><a href="carrinho.php"><i class='fa fa-cart-plus'></i>  Carrinho</a></li>
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
                                            <th class="product-price">Avaliação do Vendedor</th>
                                            <th class="product-quantity">Quantidade</th>

                                        </tr>
                                    </thead>
                                    <?php echo "<p>Data da Transição: ".date("d/m/Y")?></br>
                                    <tbody><form action="loja_login.php">

                                        <?php
                                            if(count($_SESSION['carrinho']) == 0){
                                                echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                                            }else{
                                                foreach ($_SESSION['carrinho'] as $codigo => $qtd) {
                                                    $result_estoques = "SELECT * FROM estoque_produto where codigo_estoque = '$codigo'";
                                                    $resultado_estoques = mysqli_query($conn, $result_estoques);
                                                    $row_estoques = mysqli_fetch_assoc($resultado_estoques);

                                                    //Recebendo CPF do vendedor
                                                    $cpf_ven = $row_estoques['vendedor_cpf'];
                                                    
                                                    //Impressao da Avaliação do Vendedor
                                                    $result_vendedor = "SELECT * FROM vendedor where cpf = '$cpf_ven'";
                                                    $resultado_vendedor = mysqli_query($conn, $result_vendedor);
                                                    $row_vendedor = mysqli_fetch_assoc($resultado_vendedor);

                                                    echo "<tr class='cart_item'>
                                                            <td class='product-remove'>
                                                                <a style='background-color: transparent;' href='?acao=del&codigo=".$codigo."'><button title='Remover Produto'  type='button' class='btn btn-danger'><i class=' fa fa-close'></i></button></a>
                                                            </td>
                                                            </form>
                                                            <td class='product-name'>
                                                                <p id='produto'>".$row_estoques['nome']."</p> 
                                                            </td>

                                                        <td class='product-price'>
                                                <p id='preco'>R$ ".number_format($row_estoques['valor'],2)."</p> 
                                            </td>

                                            <td class='product-price'>
                                                <p id='avaliacao'>";?>
                                            <?php 
                                            //Para saber se o vendedor ja fo avaliado
                                            if($row_vendedor['avaliacao'] == 0){
                                                $Resultado_avali = "Nunca Avaliado";
                                            }else{
                                                $Resultado_avali = $row_vendedor['avaliacao']." Estrelas";
                                            }
                                            echo "<strong>".$Resultado_avali."</strong></p> 
                                            </td>

                                            <td class='product-quantity'>
                                                <div class='quantity buttons_added'>";
                                                    $max_quant = $row_estoques['quantidade'];?>
                                                    <input type='number' name='quantidade<?php echo $codigo;?>' size='4' class='input-text total text' title='total' value='1' min='0' step='1' max='<?php echo $max_quant;?>'><b style='color: red'></b><?php echo "
                                                </div>
                                            </td>

                                        </tr>
                                                <input type='' style='display:none' value='"; 
                                                $total = date("Y-m-d");
                                                echo $total."' name='data".$codigo."'>

                                                <input type='' style='display:none' value='"; 
                                                date_default_timezone_set('America/Sao_Paulo');
                                                $total = date('H:i:s');
                                                echo $total."' name='hora".$codigo."'>

                                                <input type='' style='display:none' value='".$row_estoques['valor']."' name='valor".$codigo."'>

                                                <input type='' style='display:none' value='".$row_estoques['vendedor_cpf']."' name='vendedor_cpf".$codigo."'>

                                                <input type='' style='display:none' value='".$row_estoques['codigo_produto']."' name='produto_id".$codigo."'>

                                                <input type='' style='display:none' value='".$cpf_user."' name='cliente_cpf".$codigo."'>

                                                <input type='' style='display:none' style='display:none' value='".$codigo."' name='codigo_estoque".$codigo."'>
                                        <tr>";
                                                }
                                            }
                                        ?>

                                        
                                            <td class="actions" colspan="6">
                                                
                                                <input type="submit" value="Confirmar Compra" name="salvar" class="checkout-button button alt wc-forward" ></form><br>
                                    <br>

                                             <a  href="loja_login.php" value="Continuar_Comprando" name="continuar" class="btn btn-primary" >Continuar Comprando </a><br>
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
                    <div class="footer-menu"><center>
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
<br><br><br><center>
                            
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