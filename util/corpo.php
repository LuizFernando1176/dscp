<?php

include_once 'config.php';

function cabeca() {
    $titulos = [
        '/dsp/view/index.php' => 'DSP | Inico',
        '/dsp/view/listarUsuario.php' => 'DSP | Listar Usuario',
        '/dsp/view/cadastroUsuario.php' => 'DSP | Cadastrar Usuario',
        '/dsp/view/listarProduto.php' => 'DSP | Listar Usuario',
        '/dsp/view/cadastroProduto.php' => 'DSP | Cadastrar Usuario',
        '/dsp/view/cadastroCategoria.php' => 'DSP | Cadastrar Categoria',
        '/dsp/view/listarCategoria.php' => 'DSP | Listar Categoria',

            #pode ter 'n' páginas
    ];
    $uri = $_SERVER['PHP_SELF'];


    echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
  <title>' . $titulos[$uri] . '</title>
  <!--     Fonts and icons     -->
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- CSS Files -->
  <link href="' . urlBase() . 'css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link href="' . urlBase() . 'css/estilo.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, dont include it in your project-->

  <link href="' . urlBase() . 'demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<!--   Core JS Files   -->
  <script src="' . urlBase() . 'js/jquery.min.js"></script>
  <script src="' . urlBase() . 'js/popper.min.js"></script>
  <script src="' . urlBase() . 'js/bootstrap-material-design.min.js"></script>
  <script src="' . urlBase() . 'js/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="' . urlBase() . 'js/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="' . urlBase() . 'js/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="' . urlBase() . 'js/jquery.validate.min.js"></script>
  <script src="' . urlBase() . 'js/jquery.bootstrap-wizard.js"></script>
  <script src="' . urlBase() . 'js/bootstrap-selectpicker.js"></script>
  <script src="' . urlBase() . 'js/bootstrap-datetimepicker.min.js"></script>
  <script src="' . urlBase() . 'js/jquery.dataTables.min.js"></script>
  <script src="' . urlBase() . 'js/bootstrap-tagsinput.js"></script>
  <script src="' . urlBase() . 'js/jasny-bootstrap.min.js"></script>
  <script src="' . urlBase() . 'js/fullcalendar.min.js"></script>
  <script src="' . urlBase() . 'js/jquery-jvectormap.js"></script>
  <script src="' . urlBase() . 'js/nouislider.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="' . urlBase() . 'js/arrive.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="' . urlBase() . 'js/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="' . urlBase() . 'js/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="' . urlBase() . 'js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, dont include it in your project! -->
  <script src="demo/demo.js"></script>
';
}

function rodape() {

    echo "  // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>";
}

function sidebar() {
    /* @var $retorno type */
    $retorno = $_SERVER['PHP_SELF'];


    $index = '/dsp/view/index.php';
    $cadastroUsuario = "/dsp/view/cadastroUsuario.php" ; 
    $listarUsuario = "/dsp/view/listarUsuario.php";
    $cadatroProduto = "/dsp/view/cadastroProduto.php";  
    $listarProduto = "/dsp/view/listarProduto.php";
    $cadatroCategoria = "/dsp/view/cadastroCategoria.php" ;  
    $listarCategoria = "/dsp/view/listarCategoria.php";

    echo '<div class="wrapper">
    <div class="sidebar" data-color="danger"  >

        <div class="logo">
            <a  class="simple-text logo-normal">
                Logo Aqui
            </a>
        </div>
        <div class="sidebar-wrapper">
        <ul class="nav">
                <li class="dropdown nav-item ' . ($retorno == $index ? "active" : "") . '" >
                    
<a class="nav-link"  href="' . urlBase() . 'view/index.php">
                        <i class="fa fa-home"></i>
                        <p>Painel de Controle</p>
                    </a>
                </li>
                <li class="nav-item ' . ($retorno == $cadastroUsuario || $retorno == $listarUsuario  ? "active" : "") . '">
                    <a class="nav-link" href="' . urlBase() . 'view/cadastroUsuario.php">
                        <i class="fa fa-black-tie"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item ' . ($retorno == $cadatroProduto || $retorno == $listarProduto ? "active" : "") . '">
                    <a class="nav-link" href="' . urlBase() . 'view/cadastroProduto.php">
                        <i class="fa fa-cutlery"></i>
                        
                        <p>Produtos</p>
                    </a>
                </li>
                <li class="nav-item ' . ($retorno == $cadatroCategoria || $retorno == $listarCategoria ? "active" : "") . ' ">
                    <a class="nav-link" href="' . urlBase() . 'view/cadastroCategoria.php">
                        <i class="material-icons">content_paste</i>
                        <p>Categorias</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="' . urlBase() . '#">
                        <i class="material-icons">bubble_chart</i>
                        <p>Ordem de serviço</p>
                    </a>
                </li>
                
 

    </ul>
    </div>';
}
