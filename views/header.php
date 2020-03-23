<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">

    <!--<script src="js/jquery-3.3.1.slim.min.js" ></script>-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/sweetalert.min.js" ></script>

    <title>Bienvenid@s a Mexflix tus películas y series favoritas</title>
    <link rel="shortcut icon" type="image/png" href="./public/img/favicon.png">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />

     <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./Resourse/css/tables.css">
    <script src="./Resourse/js/tables.js" type="text/javascript"></script>    

    <!--<link rel="stylesheet" type="text/css" href="Resourse/materialize/css/materialize.min.css">-->
    
      
    <style>
       
        a{
            text-decoration:none !important;
        }
        .container{
            margin-top: 40px;
        }
    </style>

<script type="text/javascript">

});
</script>
</head>
<body>
      
  <?php    
      if($_SESSION['iniciada'])
{   
    ?>
   
<div class="page-wrapper ice-theme '. $tema .' sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div id="bar" class="sidebar-brand text-center">
                    <a href="#">Restauran bar MEXIV</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <!--<img class="img-responsive img-rounded" src="assets/img/user.jpg" alt="User picture">-->
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION['userName'] ?></strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        
                    </div>
                </div>
                
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="#" id="home">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-exchange-alt"></i>
                                <span>Pedidos</span>
                                <span class="badge badge-pill badge-danger"></span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a id="formAlta" href="pedidos">Agregar</a>
                                    </li>
                                    <li>
                                        <a id="formAlta" href="#">Consular</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-plus-square"></i>
                                <span>Ventas</span>
                                <span class="badge badge-pill badge-primary"></span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a id="formAlta" href="#">Del dia</a>
                                    </li>
                                    <li>
                                        <a id="formAlta" href="#">De la semana</a>
                                    </li>
                                    <li>
                                        <a id="formAlta" href="#">Del mes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                <span>Settings</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a id="nuevoUsuario" href="#">Nuevo Login</a>
                                    </li>
                                    <li>
                                        <a id="setting" href="#">Temas</a>
                                    </li>
                                   <li>
                                        <a id="help" href="#">Help</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div>
                    <a href="salir" id="cerrarSesion">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper -->
        <main class="page-content">
            <div id="contenedorEntradas" class="container-fluid">
            
    <!-- page-content"-->

<?php
    }
    
?>