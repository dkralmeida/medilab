<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico"> 
    <link rel="icon" href="<?php INCLUDE_PATH?>img/favicon-medilab.png" sizes="32x32">   

    <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">   

   <!-- Template Dashboard - Bootstrap -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Estilos do Sistema-->
   <link href="css/style.css" rel="stylesheet">

   <title>Medilab Sistemas</title>

   </head>
   <body>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          
          <div class="sidebar-sticky conteudo-lateral">
            <div class="logo">
              <img src="<?php INCLUDE_PATH?>img/logo.png">
            </div>
         
            <?php $usuario = 'Donisete' ?>             
             <div class="div-inline">Bem vindo(a),</div>
             <div class="div-inline usuario"><?php echo $usuario ?></div>         
             
               
             <!--menu lateral-->
              <div class="menu-lateral">

              <p><a class="btn btn-link btn-sm menu" href="<?php INCLUDE_PATH?>home"><i class="fas fa-home"></i> Home</a> </p>             
             
              </p><a class="btn btn-link btn-sm menu" href="<?php INCLUDE_PATH?>pacientes"><i class="fas fa-users"></i> Pacientes</a></p>

              <div><!--menu-lateral  


              
              <!--log medilab no rodapé -->
              <div class="logo_medilab">

                <button type="button" class="btn btn-dark btn-sm btn-sair">Sair</button> 
                <div class="logo">
                    <img src="<?php INCLUDE_PATH?>img/logo_medilab.png">
                </div>
              </div><!--logo_medilab-->          
          </div>
        </nav>

        <!-- carregamento de páginas dinâmico-->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">      
          <?php classDashboard::carregarPagina(); ?>
        </main>

      </div>
    </div>

    <!-- Bootstrap core JavaScript -->   
    <script src="dist/js/bootstrap.min.js"></script>     
   
    <script src="lib/zepto.min.js"></script>
    <script src="lib/javascript.min.js"></script>

    <!--icones-->
    <script src="https://kit.fontawesome.com/e2fe36d7e4.js" crossorigin="anonymous"></script>
  </body>
</html>
