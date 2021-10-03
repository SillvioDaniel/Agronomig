<?php 
//Puxando Info do Usuário
require_once "../inc/inicio_php_vendedor.php";

//Puxando variavel de conexão
require_once "../inc/conexao.php";

//Impressao do historico de compras
$result_historico = "SELECT * FROM historico_de_vendas where vendedor_cpf = '$cpf_user';";
$resultado_historico = mysqli_query($conn, $result_historico);
$row_historico = mysqli_num_rows ($resultado_historico);
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agronomig | Produtos Vendidos</title>
    
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
                        <h1><a href="vender.php"><img src="img/logo.png" style="margin-left: -55px"></a></h1>
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
                        <li><a href="vender.php"><i class='fa fa-home'></i>  Página Inicial</a></li>
                        <li><a href="estoque.php"><i class='fa fa-archive'></i> Estoque</a></li>
                        <li style="background-color: #392613"><a href="vendas.php"><i class='	fa fa-check'></i>  Vendas</a></li>
                        <li><a href="conta.php"><i class='fa fa-user'></i>  Conta</a></li>
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
                        <h2>Vendas Realizadas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Código do Pedido</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>
      <th scope="col">Status</th>
      <th scope="col">Adicional</th>
    </tr>
  </thead>
  <tbody>

    <!--Exibindo o historico de vendas do vendedor-->

    <?php while ($rows_historico = mysqli_fetch_assoc($resultado_historico)){ 
    ?>
    <tr>
      <th scope="row">#<?php echo $rows_historico['id_compra_venda'];?></th>
      <td><?php echo $rows_historico['produto'];?></td>
      <td><?php echo $rows_historico['quantidade'];?></td>
      <td>R$ <?php echo number_format($rows_historico['valor'],2);?></td>
      <td><?php 
            if($rows_historico['status'] == 1){
                echo "Em Aberto";
            }else if($rows_historico['status'] == 2){
                echo "Em Transito";
            }else if($rows_historico['status'] == 3){
                echo "Cancelada";
            }else{
                echo "Entregue";
            }
            ?></td>
        <td>
              <button type="button" style="font-size: 16px" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_historico['id_compra_venda'];?>">+ Detalhes</button>
        </td>
    </tr>
    <!-- Inicio Modal -->
      <div class="modal fade" id="myModal<?php echo $rows_historico['id_compra_venda'];?>" tabindex="-1" role="dialog" ledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span n="true">&times;</span></button>
              <h1 class="modal-title text-center" id="myModalLabel">Detalhes da Compra</h1><br>
              <h3>Pedido <i style="color: #00b33c;">#<?php echo $rows_historico['id_compra_venda'];?></i></h3></div>
            <div class="modal-body"> 
              <h3>Informações do Pedido</h3>
              <p style="font-size: 15px"><strong>Data do Pedido: </strong><?php echo date("d/m/Y", strtotime($rows_historico['data']));?></p>
              <p style="font-size: 15px"><strong>Forma de Pagamento: </strong><?php echo "Boleto Bancário";?></p>
              <p style="font-size: 15px"><strong>Status Pedido: </strong><?php 
            if($rows_historico['status'] == 1){
                echo "Em Aberto";
            }else if($rows_historico['status'] == 2){
                echo "Em Transito";
            }else if($rows_historico['status'] == 3){
                echo "Cancelada";
            }else{
                echo "Entregue";
            }
            ?></p><br><br>

              <h3>Dados do Comprador</h3>
              <?php
              //Impressão do enderço do Comprador
                $cliente_cpf = $rows_historico['cliente_cpf'];
                $result_compradores = "SELECT * FROM cliente where cpf = '$cliente_cpf';";
                $resultado_compradores = mysqli_query($conn, $result_compradores);
                $row_compradores = mysqli_fetch_assoc($resultado_compradores);
              ?>
              <p style="font-size: 15px"><strong>Endereço: </strong><?php echo $row_compradores['endereco'];?></p>
              <p style="font-size: 15px"><strong>Estado: </strong><?php echo $row_compradores['estado'];?></p>
              <p style="font-size: 15px"><strong>Telefone: </strong><?php echo $row_compradores['telefone'];?></p><br>
              <center><button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button></center>
            </div>
          </div>
        </div>
      </div>
      <!-- Fim Modal -->
    <?php } ?>

  </tbody>
</table>


             <style>
* {
  box-sizing: border-box;
}

body {
  background-color: white;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
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
}
</style>
<style>
/* The container */


/* Hide the browser's default checkbox */


/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

</style>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Anunciar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Avançar";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script><br>
            </div>
          </div>
        </div>
      </div>

    
    <!-- End Middle Column -->
    </div>

<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

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
                        <h2 class="footer-wid-title">Comprar produtos</h2>
                        <p>Comece a comprar produtos agora mesmo.</p>
                        <div class="newsletter-form">
                            <form action="index.php" method="post">
                            <div class="col-md-12 col-xs-6">
                            <center><button type="submit" class="btn btn-success btn-block" style="font-size:24px;color:white"><i class="fa fa-random fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i> Trocar </button>
                            </div>
                            </form>

                            <script type="text/javascript">
                                $('#exampleModal').on('show.bs.modal', function (event) {
                                  var button = $(event.relatedTarget) // Button that triggered the modal
                                  var recipient = button.data('whatever') // Extract info from data-* attributes
                                  // If necessary, you could initiate an AJAX request here (and then do the updating in a       callback).
                                  // Update the modal's content. We'll use jQuery here, but you could use a data binding      library or other methods                           instead.
                                  var modal = $(this)
                                  modal.find('.modal-body input').val(recipient)
                          
                                  })
                            </script>

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