<?php
//Evitar Bug's
require_once "inc/inicio_php_base.php";
?>


<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Painel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/fakeLoader.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="fakeloader"></div>

        <section id="section-navigation">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/fakeLoader.min.js"></script>
        <script>
            $(document).ready(function(){
                $.fakeLoader({
                    timeToHide:1200,
                    bgColor:"#00cc66",
                    spinner:"spinner5"
                });
            });
        </script>
<br><br>
<center><h1 style="color: #00cc66">Escolha o tipo de cadastro</h1><br><br>
    <a href="comprador.php"><button style="width: 150px; height: 100px" class="btn btn-outline-success"><h4>Comprador</button></a>
    &nbsp; &nbsp; &nbsp; &nbsp;
     <a href="vendedor.php"><button style="width: 150px; height: 100px;" class="btn btn-outline-success"><h4>Vendedor</button></a>
        <div class="fakeLoader"></div>
    </body>
</html>



