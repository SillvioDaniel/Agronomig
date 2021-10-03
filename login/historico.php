<?php 
//Puxando Info do Usuário
require_once "../inc/inicio_php_comprador.php";

//Puxando variavel de conexão
require_once "../inc/conexao.php";

//Impressao do historico de compras
$result_historico = "SELECT * FROM historico_de_compras where cpf = '$cpf_user';";
$resultado_historico = mysqli_query($conn, $result_historico);
$row_historico = mysqli_num_rows ($resultado_historico);

//Recuperar arquivo da classe
require_once "../classe/ProdutoClasse.php";
require_once "../classe/AvaliacaoClasse.php";

//Criar um objeto
$atualizar_status = new Produto();
$inserir_avaliacao = new Avaliacao();

//Chamar a funcao para inserir as atualizações
if (isset($_POST['entregue'])){
    $atualizar_status->atualizar_status();
}else if(isset($_POST['avaliar'])){
    if(!empty($_POST['estrela'])){
        $inserir_avaliacao->inserir_avaliacao();
    }else{
        header("Location: historico.php");
    }
    
}

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Histórico de Compras</title>
    
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
                        <li><a href="loja_login.php"><i class='fa fa-shopping-cart'></i> Loja</a></li>
                        <li><a href="pacotes.php"><i class='fa fa-shopping-basket'></i> Pacotes Promocionais</a></li>
                        <li class = 'active'> <a href="historico.php"><i class='fa fa-calendar-check-o'></i>  Histórico de Compras</a></li>
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
                        <h2>Compras Realizadas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="alert alert-info alert-dismissible fade in text-center">
            <h3><strong>Atenção!!</strong></h3> 
            <p>É possivel avaliar os produtos apenas um por vez, e em ordem de compra.</p>
        </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Código do Produto</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>
      <th scope="col">Status</th>
      <th scope="col">Adicional</th>
    </tr>
  </thead>
  <tbody>
    
    <!--Exibindo o historico de vendas do vendedor-->
    <?php while ($rows_historico = mysqli_fetch_assoc($resultado_historico)){ ?>
    <tr>
      <th scope="row">#<?php echo $rows_historico['codigo_produto'];?></th>
      <td><?php echo $rows_historico['produto'];?></td>
      <td><?php echo $rows_historico['quantidade'];?></td>
      <td>R$ <?php echo number_format($rows_historico['valor'],2);?></td>
      <td><?php 
            if($rows_historico['status'] == 1){
                echo "Em Aberto";
            }else if($rows_historico['status'] == 2){
                echo "Em Entrega";
            }else if($rows_historico['status'] == 3){
                echo "Cancelada";
            }else{
                echo "Entregue";
            }
            ?>    
        </td>
        <td><?php 
            if($rows_historico['status'] == 1){
                //Apresentando a Avaliacao por estrelas.
                echo "<form method='POST' action='historico.php' enctype='multipart/form-data'>
                <div class='estrelas'>
                <input type='radio' id='vazio' name='estrela' value='' checked>
                
                <label for='estrela_um'><i class='fa'></i></label>
                <input type='radio' id='estrela_um' name='estrela' value='1'>
                
                <label for='estrela_dois'><i class='fa'></i></label>
                <input type='radio' id='estrela_dois' name='estrela' value='2'>
                
                <label for='estrela_tres'><i class='fa'></i></label>
                <input type='radio' id='estrela_tres' name='estrela' value='3'>
                
                <label for='estrela_quatro'><i class='fa'></i></label>
                <input type='radio' id='estrela_quatro' name='estrela' value='4'>
                
                <label for='estrela_cinco'><i class='fa'></i></label>
                <input type='radio' id='estrela_cinco' name='estrela' value='5'>
                
                <button type='submit' name='avaliar' class='checkout-button btn btn-success button alt wc-forward'>Avaliar</button>
                <input class='w3-input w3-border' name='vendedor_cpf' style='display:none' type='text' value='".$rows_historico['vendedor_cpf']."'>
                <input class='w3-input w3-border' name='id' style='display:none' type='number' value='".$rows_historico['id_compra_venda']."'>
            </div>
        </form>";
            }else if($rows_historico['status'] == 2){
                //Apresentando o botao para o usuario avisar se o produto chegou.
                echo "<form action='historico.php' method='POST'>
                        <button type='submit' name='entregue' class='checkout-button btn btn-success button alt wc-forward'>Produto Entregue</button>
                        <input class='w3-input w3-border' name='id' style='display:none' type='number' value='".$rows_historico['id_compra_venda']."'></form>";
            }else if($rows_historico['status'] == 3){
                echo "";
            }else{
                echo "";
            }
            ?>   
        </td>
    </tr>
    <?php } ?>

    <style>
        .estrelas input[type=radio]{
            display: none;
        }.estrelas label i.fa:before{
            content: '\f005';
            color: #FC0;
        }.estrelas  input[type=radio]:checked  ~ label i.fa:before{
            color: #CCC;
        }
    </style>

  </tbody>
</table>
</div></div></div>
<br>

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