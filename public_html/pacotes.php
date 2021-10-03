<?php
//Evitar Bug's
require_once "inc/inicio_php_base.php";

//Puxando variavel de conexão
  require_once "inc/conexao.php";

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
    <style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #f4511e;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  color: white;
}

.button:hover span {
  padding-right: 15px;
  color: white;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
  color: white;
}
</style>
    <style type="text/css">
    .label-float{
  position: relative;
  padding-top: 10px;
}

.label-float input{
  border: 1px solid lightgrey;
  border-radius: 5px;
  outline: none;
  min-width: 250px;
  padding: 15px 20px;
  font-size: 16px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  -webkit-appearance:none;
}

.label-float input:focus{
  border: 2px solid #DodgerBlue;
}

.label-float input::placeholder{
  color:transparent;
}

.label-float label{
  pointer-events: none;
  position: absolute;
  top: calc(50% - 8px);
  left: -10px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  background-color: white;
  padding: 5px;
  box-sizing: border-box;
}

.label-float input:required:invalid + label{
  color: black;
}
.label-float input:focus:required:invalid{
  border: 1px solid #ff6666;
}
.label-float input:required:invalid + label:before{
  content: '*';
}
.label-float input:focus + label,
.label-float input:not(:placeholder-shown) + label{
  font-size: 15px;
  top: 0;
  color: DodgerBlue;
}

</style>
  </head>
  <body>
  
                <form action="classe/ActLogin.php" method="POST">
<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity" style="z-index: 100234234;">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" style="cursor: pointer;" class="fa fa-remove w3-xlarge  w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide">Entrar</h2>
      <p>Entre na sua conta ou cadastre-se agora</p>
      <center><b style="color: red; font-size: 20px;">
      <?php 
      //Verificando se existe o acesso invalido
    if (isset($_SESSION['login_invalido'])){
        echo $_SESSION['login_invalido'];
        unset($_SESSION['login_invalido']);
    }
       ?>
      </b></center>
        <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="text" class="form-control" name="usuario" placeholder="  " required="">
      <label style="margin-left: 20px;">Usuário</label>
  </div>
    </div>
         <div class="form-group">
        <div class="label-float">
      <input style="border-left-color: transparent;border-top-color: transparent;border-right-color: transparent; height: 45px" type="password" class="form-control" name="senha" placeholder="  " required="">
      <label style="margin-left: 20px;">Senha</label>
  </div>
    </div>
      <button type="submit" style="vertical-align:middle; width: 100%;" class=" button w3-green w3-margin-bottom" name="salvar" ><span>Entrar </span></button>
    </form>
<form action="cadastrar.php" method="post">

       <button style="vertical-align:middle; width: 100%;" type="submit" class=" button w3-orange w3-margin-bottom" name="salvar" onclick="document.getElementById('download').style.display='none'"><span style="color: white;">Cadastrar</span></button>
</form>
    </div>
  </div>
</div>
 <div class="header-area" style="background-color:  #996633
">
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline" style="cursor: pointer;">
                            <li><a style="text-decoration:none;color: white" href="cadastrar.php"><i class="fa fa-user-plus"></i> Cadastro</a></li>

                            <li><a style="text-decoration:none;color: white" onclick="document.getElementById('download').style.display='block'"><i class="fa fa-user"></i> Login</a></li>
                                    
                                </ul>
                            </li>

                            
                        </ul>
                    </div>
                </div></div> </div> </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/alogo.png"></a></h1>
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
                <div class="navbar-collapse collapse" style="background-color: #996633">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><i class='fa fa-home'></i> Página Inicial</a></li>
                        <li><a href="loja.php"><i class='fa fa-shopping-cart'></i> Loja</a></li>
                        <li class="" style="background-color:#392613 "><a href="pacotes.php"><i class='fa fa-shopping-basket'></i>  Pacotes Promocionais</a></li>
                        <li><a href="contato.php"><i class='fa fa-user'></i>  Contato</a></li>
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
                            <h2 class="related-products-title">PACOTE DO MOMENTO</h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images"><br><br><br>
                                    <div class="product-main-img">
                                        <img src="<?php echo "login/imagens_vendedor/".$row_principal_pacote['foto'];?>"  onclick="document.getElementById('modal01').style.display='block'" alt="">
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
                                    <h2 class="product-name"><?php echo $row_principal_pacote['nome'];?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo "R$ ".number_format($row_principal_pacote['valor'],2);?></ins>
                                    </div>    

                                        <button onclick="document.getElementById('download').style.display='block'" class="add_to_cart_button" type="submit"><i class="fa fa-cart-plus"></i> Comprar</button>
                                    
                                    <div class="product-inner-category">
                                        <p>Categoria: Pacote Promocional</a>.</p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descrição</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descrição do Produto</h2>  
                                                <p>No momento é o pacote mais consumido pelos usuários de nosso site. Tem se destacado pelo nível da qualidade do produto e também pela competência do vendedor.</p>

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


                                <!--Apresentando Principais Pacotes-->
                                <?php
                                  //Loop para apresentar todos os resultados
                                    while($rows_principais_pacotes = mysqli_fetch_array($resultado_principais_pacotes)){
                                ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo "login/imagens_vendedor/".$rows_principais_pacotes['foto']; ?>" alt="">
                                        <div class="product-hover">
                                            <a onclick="document.getElementById('download').style.display='block'" class="add-to-cart-link" <i class="fa fa-shopping-cart"></i> Comprar</a>

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
                         <p>É gratuito, basta realizar o cadastro para começar a vender seus produtos.</p>
                        <div class="newsletter-form">
                          
<div class="col-md-12 col-xs-6">
<center><button onclick="document.getElementById('download').style.display='block'" type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white">Começar </button>
</div>
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