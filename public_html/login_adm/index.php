<?php 
//Puxando Info do Usuário
require_once "../inc/inicio_php_adm.php";

//Puxando variavel de conexão
require_once "../inc/conexao.php";

  //Select para buscar o total de vendas já feita pelos usuários
    $result_quant_vendas = "SELECT * FROM quantidade_vendas;";
    $resultado_quant_vendas = mysqli_query($conn, $result_quant_vendas);
    $row_quant_vendas = mysqli_fetch_assoc($resultado_quant_vendas);
  //Select para buscar a média diária de compras já feita pelos usuários
    $result_media_diaria = "SELECT avg(Quantidade) FROM compra_dia;";
    $resultado_media_diaria = mysqli_query($conn, $result_media_diaria);
    $row_media_diaria = mysqli_fetch_assoc($resultado_media_diaria);
  //Select para buscar a média mensal de compras já feita pelos usuários
    $result_media_mensal = "SELECT avg(Quantidade) FROM compra_mes;";
    $resultado_media_mensal = mysqli_query($conn, $result_media_mensal);
    $row_media_mensal = mysqli_fetch_assoc($resultado_media_mensal);
  //Select para buscar o melhor mês até o momento
    $result_melhor_mes = "SELECT * FROM melhor_mes;";
    $resultado_melhor_mes = mysqli_query($conn, $result_melhor_mes);
    $row_melhor_mes = mysqli_fetch_assoc($resultado_melhor_mes);
    $numero_mes = $row_melhor_mes['Mês'];
  //Select para buscar a maior vendas já feita pelos usuários
    $result_maior_venda = "SELECT * FROM maior_venda;";
    $resultado_maior_venda = mysqli_query($conn, $result_maior_venda);
    $row_maior_venda = mysqli_fetch_assoc($resultado_maior_venda);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Agronomig | Painel Administrativo
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />


  <!--GRÁFICOS-->
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      //Função de Venda de Produtos Média Anual
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(ProdutosVendidosAnual);



      function ProdutosVendidosAnual() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Quantidade de Vendas'],

              <?php
                //Fazendo a seleção 
                  $result_produtos_anual = "SELECT * FROM compra_mes;";
                  $resultado_produtos_anual = mysqli_query($conn, $result_produtos_anual);
                //Loop para apresentar todos os resultados
                  while($rows_produtos_anual = mysqli_fetch_array($resultado_produtos_anual)){

              ?>
              //Enviando as Info
                //Verificando o mês das Vendas
                 ['<?php 
                 if ($rows_produtos_anual['mes'] == 1) {
                   echo "Janeiro";
                 }else if($rows_produtos_anual['mes'] == 2) {
                   echo "Fevereiro";
                 }else if($rows_produtos_anual['mes'] == 3) {
                   echo "Março";
                 }else if($rows_produtos_anual['mes'] == 4) {
                   echo "Abril";
                 }else if($rows_produtos_anual['mes'] == 5) {
                   echo "Maio";
                 }else if($rows_produtos_anual['mes'] == 6) {
                   echo "Junho";
                 }else if($rows_produtos_anual['mes'] == 7) {
                   echo "Julho";
                 }else if($rows_produtos_anual['mes'] == 8) {
                   echo "Agosto";
                 }else if($rows_produtos_anual['mes'] == 9) {
                   echo "Setembro";
                 }else if($rows_produtos_anual['mes'] == 10) {
                   echo "Outubro";
                 }else if($rows_produtos_anual['mes'] == 11) {
                   echo "Novembro";
                 }else{
                   echo "Dezembro";
                 }
                ?>',  <?php 
              //Verificando a quantidade das Vendas
                if($rows_produtos_anual){
                  echo $rows_produtos_anual['Quantidade'];
                }
                 ?>],
              <?php } ?>
            ]);

        //Css
        var options = {
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('graficoProdutosAnual'));
        chart.draw(data, options);
      }



      //Função dos Melhores Vendedores
          google.charts.setOnLoadCallback(MelhoresVendedores);


          function MelhoresVendedores() {
            var data = google.visualization.arrayToDataTable([
              ["Nome", "Total de Lucro", { role: "style" } ],

              <?php
                //Fazendo a seleção 
                  $result_top_vendedores = "SELECT * FROM melhores_vendedores;";
                  $resultado_top_vendedores = mysqli_query($conn, $result_top_vendedores);
                //Loop para apresentar todos os resultados
                  while($rows_top_vendedores = mysqli_fetch_array($resultado_top_vendedores)){

              ?>
              //Enviando as Info
                ["<?php echo $rows_top_vendedores['nome']; ?>", <?php echo $rows_top_vendedores['total']; ?>, "#4285f4"],

              <?php } ?>
            ]);
      
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                             { calc: "stringify",
                               sourceColumn: 1,
                               type: "string",
                               role: "annotation" },
                             2]);
      
            var options = {
              legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("graficoVendedor"));
            chart.draw(view, options);
        }



        //Função dos Produtos mais vendidos
          google.charts.setOnLoadCallback(TopProdutosVendidos);


          function TopProdutosVendidos() {
            var data = google.visualization.arrayToDataTable([
              ["Nome", "Quantidade Vendida", { role: "style" } ],

              <?php
                //Fazendo a seleção 
                  $result_top_produtos = "SELECT * FROM produtos_mais_vendidos;";
                  $resultado_top_produtos = mysqli_query($conn, $result_top_produtos);
                //Loop para apresentar todos os resultados
                  while($rows_top_produtos = mysqli_fetch_array($resultado_top_produtos)){

                ?>
              //Enviando as Info
                ["<?php echo $rows_top_produtos['nome']; ?>", <?php echo $rows_top_produtos['quantidade']; ?>, "MediumSeaGreen"],

              <?php } ?>
            ]);
      
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                             { calc: "stringify",
                               sourceColumn: 1,
                               type: "string",
                               role: "annotation" },
                             2]);
      
            var options = {
              legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("graficoProduto"));
            chart.draw(view, options);
        }


        //Função dos Melhores Compradores
          google.charts.setOnLoadCallback(MelhoresCompradores);


          function MelhoresCompradores() {
            var data = google.visualization.arrayToDataTable([
              ["Nome", "Total de Gasto", { role: "style" } ],

              <?php
                //Fazendo a seleção 
                  $result_top_compradores = "SELECT * FROM melhores_compradores;";
                  $resultado_top_compradores = mysqli_query($conn, $result_top_compradores);
                //Loop para apresentar todos os resultados
                  while($rows_top_compradores = mysqli_fetch_array($resultado_top_compradores)){

              ?>
              //Enviando as Info
                ["<?php echo $rows_top_compradores['nome']; ?>", <?php echo $rows_top_compradores['total']; ?>, "Orange"],

              <?php } ?>
            ]);
      
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                             { calc: "stringify",
                               sourceColumn: 1,
                               type: "string",
                               role: "annotation" },
                             2]);
      
            var options = {
              legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("graficoComprador"));
            chart.draw(view, options);
        }
    </script>
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

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
         <CENTER> AGRONOMIG</CENTER>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Painel de Controle</p>
            </a>
          </li>
         
          <li>
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
           <li class="active-pro" id="txt">
            <a href="" onclick="imprime()">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <script type="text/javascript" language="javascript">
      function imprime(text){
        text=document
        print(text)
      }
    </script>
    <form>
    <p>IMPRIMIR DADOS</p>
    </form>

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
            <a class="navbar-brand" href="#agronomig">Painel de Controle</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
               
        
              </div>
            </form>
            <ul class="navbar-nav">
            
           
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Mais ações</span>
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
        <div class="row"><div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Histórico Anual</h5>
                <h4 class="card-title">Quantidade de Produtos Vendidos Mensalmente</h4>
                <div class="chart" id="graficoProdutosAnual"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Quantidade de Lucros</h5>
                <h4 class="card-title">Melhores Vendedores</h4>
                <div class="chart" id="graficoVendedor"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Quantidade de Gastos</h5>
                <h4 class="card-title">Melhores Compradores</h4>
                <div class="chart" id="graficoComprador" style="width: 100%;"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Quantidade do Produto Vendido</h5>
                <h4 class="card-title">Produtos Mais Vendidos</h4>
                <div class="chart" id="graficoProduto" style="width: 100%;"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Vendas Totais</h5>
                <h4 class="card-title">Quantidade de Vendas</h4>
                <br><br><center><h2><?php echo $row_quant_vendas['vendas_concluidas']; ?></h2></center>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">A média diária</h5>
                <h4 class="card-title">Vendas e Compras Por Dia</h4>
                <br><br><center><h2><?php echo number_format ($row_media_diaria['avg(Quantidade)'],2); ?></h2></center>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">A média diária</h5>
                <h4 class="card-title">Vendas e Compras Por Mês</h4>
                <br><br><center><h2><?php echo number_format ($row_media_mensal['avg(Quantidade)'],2); ?></h2></center>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Mês Mais Movimentado</h5>
                <h4 class="card-title">O Melhor Mês</h4>
                <br><br><center><h2><?php 
                if ($numero_mes == 1) {
                  echo "Janeiro";
                }else if($numero_mes == 2){
                  echo "Fevereiro";
                }else if($numero_mes == 3){
                  echo "Março";
                }else if($numero_mes == 4){
                  echo "Abril";
                }else if($numero_mes == 5){
                  echo "Maio";
                }else if($numero_mes == 6){
                  echo "Junho";
                }else if($numero_mes == 7){
                  echo "Julho";
                }else if($numero_mes == 8){
                  echo "Agosto";
                }else if($numero_mes == 9){
                  echo "Setembro";
                }else if($numero_mes == 10){
                  echo "Outubro";
                }else if($numero_mes == 11){
                  echo "Novembro";
                }else{
                  echo "Dezembro";
                }

                ?></h2></center>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Compras/Vendas Gerais</h5>
                <h4 class="card-title">A Maior Compra/Venda</h4>
                <br><br><center><h2><?php echo "R$ ".number_format($row_maior_venda['Valor'],2); ?></h2></center>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Atualizando
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
  
</body>

<script src="assets/lib/jquery.min.js"></script>
<script src="assets/lib/bootstrap.min.js"></script>
<script src="assets/lib/raphael.min.js"></script>
<script src="assets/lib/morris.min.js"></script>

<script>
    $(function () {
        var data4 = {};

        $.ajax({
            url: "../inc/dados_grafico_vendedor.php",
            async: false,
            dataType: 'json',
            success: function(data) {
                data4 = data;
            }
        });

        var bar = new Morris.Bar({
            element: 'bar-chart',
            resize: true,
            data: data4,
            barColors: ['#5F9EA0', '#cd5c5c', '#778899', '#ff4500', '8b4513'],
            xkey: 'eixoX',
            ykeys: ['a', 'b','c','d','e'],
            labels: ['a)', 'b)', 'c)', 'd)', 'e)'],
            hideHover: 'auto'
        });

    });
</script>

</html>