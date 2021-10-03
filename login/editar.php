<?php
//Puxando Info do Usuário
require_once "../inc/inicio_php_duplo.php";

//Para salvar as alterações feita pelo usuário
require_once "../classe/ContaClasse.php";

$editar = new Conta();
//Ao pressionar o determinado botão
if (isset($_GET['alterar'])){
    if ($funcao == "vendedor_cpf") {
        $editar->alterar_vendedor();
        header("location:vender.php");
    }else{
        $editar->alterar_cliente();
        header("location:loja_login.php");
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Conta</title>
    
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
    <style type="text/css">
      li:hover{
        background-color: #392613; color: white;
      }
      a:hover{
        color: white;
      }
    </style>
    <style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 

</style>
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
                        <h2>Conta</h2>
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
                    
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

<h2>Sua Conta</h2>
  <form action="editar.php" method="get">
    <div class="form-group">
      <label for="nome">Nome Completo:</label>
      <input required type="text" maxlength="80" name="nome" value="<?php echo $_SESSION['usuario']->nome; ?>" class="form-control text-center">
    </div>

    <div class="form-group">
        <input required type="text" name="cpf" value="<?php echo $_SESSION['usuario']->cpf; ?>" class="form-control text-center" style="display:none">
    </div>

    <div class="form-group">
    <?php
    //Caixas de textos de acordo a atividade que o usuário exerce no momento
    if (empty($_SESSION['usuario']->conta)) {
        //Forma de Pagamento
        echo "<div class='form-group'><label for='pagamento'>Forma de Pagamento:</label>
        <input required type='text' maxlength='45' name='pagamento' value='".$_SESSION['usuario']->pagamento."' class='form-control text-center'></div>";
    }else{
        //Banco
        echo "<div class='form-group'><label for='banco'>Banco:</label>
        <input required type='text' maxlength='30' name='banco' value='".$_SESSION['usuario']->banco."' class='form-control text-center'></div>";
        //Agencia
        echo "<div class='form-group'><label for='agencia'>Agencia:</label>
        <input required type='text' max='999999' name='agencia' value='".$_SESSION['usuario']->agencia."' class='form-control text-center'></div>";
        //Conta
        echo "<div class='form-group'><label for='conta'>Conta:</label>
        <input required type='text' max='9999999' name='conta' value='".$_SESSION['usuario']->conta."' class='form-control text-center'></div>";
    }?>
    </div>

    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input required type="text" name="telefone" maxlength="15"  OnKeyPress="formatar('##-#####-####', this)" value="<?php echo $_SESSION['usuario']->telefone; ?>" class="form-control text-center">
    </div>
          
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input required type="text" name="endereco" maxlength="120" value="<?php echo $_SESSION['usuario']->endereco; ?>" class="form-control text-center">
    </div>

    <div class="form-group">
      <label for="estado">Estado:</label>
      <input required type="text" name="estado" maxlength="2" value="<?php echo $_SESSION['usuario']->estado; ?>" class="form-control text-center">
    </div>

    <div class="form-group">
      <label for="email">E-mail:</label>
      <input required type="text" name="email" maxlength="80" value="<?php echo $_SESSION['usuario']->email; ?>" class="form-control text-center">
    </div>
    
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="text" name="senha" maxlength="80" value="<?php echo $_SESSION['usuario']->senha; ?>" class="form-control text-center">
    </div>

    
    <button style="width: 60%;" type="submit" name="alterar" class="btn btn-success">Salvar Alteração</button></form>
    <center>
        <div class="col-md-12"> 
    <div class="checkbox">
 
    </div>
    <div class="col-md-12">
    </div>
    
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