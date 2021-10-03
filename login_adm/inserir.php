<?php
//Puxando Info do Usuário
require_once "../inc/inicio_php_adm.php";

//Variaveis para validar os campos
$erro_usuario = "";

//Chamar a funcao para inserir a determinada ação
if (isset($_GET['confirmar_notificacao'])){
  //Recuperar arquivo da classe
  require_once "../classe/NotificacaoClasse.php";
  //Criar um objeto do tipo notificacao
  $notificacao = new Notificacao();
  //Chama a função e insere a notificação
  $notificacao->inserir();
}else if(isset($_GET['confirmar_user_adm'])){
    //Variaveis para o critério do select SQL
    $usuarioo = $_GET["login"];

    //Recuperar arquivo da classe
    include_once ("../inc/conexao.php");

    //Select para buscar se já existe o usuario no VENDEDOR
      $result_usuario_vendedor = "SELECT count(usuario) FROM vendedor where usuario = '$usuarioo'";
      $resultado_usuario_vendedor = mysqli_query($conn, $result_usuario_vendedor);
      $row_usuario_vendedor = mysqli_fetch_assoc($resultado_usuario_vendedor);
    //Select para buscar se já existe o usuario no COMPRADOR
      $result_usuario_cliente = "SELECT count(usuario) FROM cliente where usuario = '$usuarioo'";
      $resultado_usuario_cliente = mysqli_query($conn, $result_usuario_cliente);
      $row_usuario_cliente = mysqli_fetch_assoc($resultado_usuario_cliente);
    //Select para buscar se já existe o usuario no ADM
      $result_usuario_adm = "SELECT count(login) FROM adm where login = '$usuarioo'";
      $resultado_usuario_adm = mysqli_query($conn, $result_usuario_adm);
      $row_usuario_adm = mysqli_fetch_assoc($resultado_usuario_adm);

    if($row_usuario_cliente['count(usuario)']>=1 || $row_usuario_vendedor['count(usuario)']>=1 || $row_usuario_adm['count(login)']>=1) {
        $erro_usuario = "Este Usuario já está Cadastrado";
    }else{
        //Recuperar arquivo da classe
        require_once "../classe/AdmClasse.php";
        //Criar um objeto do tipo notificacao
        $user_adm = new Adm();
        //Chama a função e insere o novo user ADM
        $user_adm->inserir_adm();
    }    
        
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Agronomig | Inserir
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          <CENTER>AGRONOMIG</CENTER>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Painel de Controle</p>
            </a>
          </li>
          <li class="active ">
            <a href="./inserir.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Inserir</p>
            </a>
          </li>
          <li>
            <a href="./vendedores.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Lista de Vendedores</p>
            </a>
          </li>
          <li>
            <a href="./compradores.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Lista de Compradores</p>
            </a>
          </li>
          <li>
            <a href="./comentarios.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Lista de Comentários</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#agronomig">Inserir</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
             
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Mais Ações</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../inc/sair.php">Sair</a>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"><br><br>
                <center><h5 >INSERIR NOTIFICAÇÕES</h5>
              </div>
              <div class="card-body">
                <form action="inserir.php" method="GET">
                  <div class="row">
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Cor da Notificação</label>
                        <select name="cor" class="form-control">
                          <option value="warning">Laranja</option>
                          <option value="danger">Vermelho</option>
                          <option value="info">Azul</option>
                          <option value="success">Verde</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Título da Notificação</label>
                        <input type="text" name="titulo" maxlength="20" class="form-control" required="" placeholder="Aviso" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tipo de Usuário</label>
                        <select name="tabela" class="form-control">
                          <option value="cliente">Comprador</option>
                          <option value="vendedor">Vendedor</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Mensagem da Notificação</label>
                        <input type="text" name="descricao" maxlength="100" class="form-control" required="" placeholder="Obrigado por usar nossa plataforma" >
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"><br>
                        <button type="submit" name="confirmar_notificacao" class="btn btn-outline-success" style="width: 100%">Confirmar</button><br>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
              </div>
              <div class="card-body">
                <div class="author">
                  <H5>
                   INSERIR USUÁRIO ADMINISTRATIVO
                  </H5>
                </div><form action="inserir.php" method="GET">
                 <div class="row"><div class="col-md-12">
                  <!--Caso o usuário já exista-->
                    <center><b style="color: red">
                    <?php 
                      echo "".$erro_usuario;
                    ?>
                    </b></center>
                      <div class="form-group">
                        <center><label>Nome</label>
                        <input type="text" name="nome" class="form-control" required="" >
                      </div>
                      <center>
                    <div class="col-md-8">
                      <div class="form-group">
                        <center><label>Usuário</label>
                        <input type="text" name="login" class="form-control" required="" >
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <center><label>Senha</label>
                        <input type="password" name="senha" class="form-control" required="" >
                      </div></center>

                        <button type="submit" name="confirmar_user_adm" class="btn btn-outline-success" style="width: 100%">Confirmar</button>
                      </form>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>