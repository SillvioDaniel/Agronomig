<?php
//Puxando Info do Usuário
require_once "../inc/inicio_php_duplo.php";

//(Verificando se é  Vendedor ou Comprador)
//Selecionando a tabela para fazer o SELECT corretamente
if (empty($_SESSION['usuario']->conta)) {
    $funcao = "cliente_cpf";
}else{
    $funcao = "vendedor_cpf";
}

//Importar a classe Notificacao
require_once '../classe/NotificacaoClasse.php';

//Select para apresentar as notificações do usuário
    $result_notificacao = "SELECT * FROM notificacao where $funcao = '$cpf_user' and ativa = 1 order by codigo desc;";
    $resultado_notificacao = mysqli_query($conn, $result_notificacao);
    $row_notificacao = mysqli_num_rows ($resultado_notificacao);

//Excluindo a notificação no visual do usuário, passando o codigo escolhido pelo usuario.
$notificacao = new Notificacao();
if (isset($_GET["codigo"])) {
    $notificacao->excluir($_GET["codigo"]);
    header('location: notificacao.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Notificações</title>
    
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
   
    <div class="header-area" style="background-color: #996633">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                        </ul>
                    </div>
                </div>
                    <style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 

</style>
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
<!--TIRAR O SUBLINHADOOOOOOOOOOOOOOOOOOO-->
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li style='background-color: #392613'> <a style="color: white"  href="notificacao.php" class="w3-bar-item " title="Notificações"><i class="fa fa-bell"></i><span  class=" " ><?php echo " ".$row_notificacoes['count(ativa)'];?></span> Notificações</a> </li>
                            <li><a style="color: white" href="configs.php"><i class="fa fa-gear"></i> Configurações</a></li>
                            <li><a style="color: white" href="../inc/sair.php"><i class="fa fa-close"></i> Sair</a></li>
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

                        <?php
                        //Menu da página de acordo a atividade que o usuário exerce no momento
                        //(Verificando se é  Vendedor ou Comprador)
                        if (empty($_SESSION['usuario']->conta)) {
                            echo"<li><a href='loja_login.php'><i class='fa fa-shopping-cart'></i> Loja</a></li>
                            <li><a href='pacotes.php'><i class='fa fa-shopping-basket'></i> Pacotes Promocionais</a></li>
                            <li><a href='historico.php'><i class='fa fa-calendar-check-o'></i>  Histórico de Compras</a></li>
                            <li><a href='conta.php'><i class='fa fa-user'></i> Conta</a></li>
                            <li><a href='carrinho.php'><i class='fa fa-cart-plus'></i>  Carrinho</a></li>";
                            echo"";
                        }else{
                            echo"<li><a href='vender.php'><i class='fa fa-home'></i>  Página Inicial</a></li>
                            <li><a href='estoque.php'><i class='fa fa-archive'></i> Estoque</a></li>
                            <li><a href='vendas.php'><i class='fa fa-check'></i>  Vendas</a></li>
                            <li><a href='conta.php'><i class='fa fa-user'></i> Conta</a></li>";
                        }
                        ?>

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
                        <h2>Notificações</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                        
                        
<center>
<tbody>

    <!--Exibindo as Notificações não vistas pelo usuário-->
    <?php while ($rows_notificacao = mysqli_fetch_assoc($resultado_notificacao)){ ?>

        <div class="alert alert-<?php echo $rows_notificacao['cor'];?> alert-dismissible fade in">
            <h3><strong><?php echo $rows_notificacao['titulo'];?></strong></h3> <p><?php echo $rows_notificacao['descricao'];?></p>
            <form>
            <button style="margin-left: 99%;width: 50px;" class="btn btn-link" href="notificacao.php"><img src="img/fechar.png" style="width: 250px"></button>
            <input class="w3-input w3-border" name="codigo" style="display:none" type="text" value="<?php echo $rows_notificacao['codigo'];?>" ></form>
        </div>

    <?php } ?>

</div><hr>
</div>

                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

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

                        <?php
                        //Menu de acordo a atividade que o usuário exerce no momento
                        require_once "../inc/final_duplo.php";
                        ?>

                        <div class="newsletter-form">
                            <form action="../inc/sair.php" method="post">
                            <div class="col-md-12 col-xs-6">
                            <center><button type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><i class="fa fa-random fa-fw w3-margin-right w3-xxlarge "></i> Trocar </button>
                            </div>
                            </form><br><br><br>
                            
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