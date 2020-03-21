<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenid@s a Mexflix tus películas y series favoritas</title>
    <link rel="shortcut icon" type="image/png" href="./public/img/favicon.png">
    <script src="http://localhost/system/Resourse/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="http://localhost/system/Resourse/js/jquery.validate.js" type="text/javascript"></script>
    <script src="http://localhost/system/Resourse/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="http://localhost/system/Resourse/js/funciones.js" type="text/javascript"></script>
    <script src="http://localhost/system/Resourse/js/Usuarios.js" type="text/javascript"></script>
    <script src="./Resourse/js/app.js" type="text/javascript"></script>
    <script src="http://localhost/system/Resourse/materialize/js/materialize.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./Resourse/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <style>
       
        a{
            text-decoration:none !important;
        }
        .container{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <nav>
       <!-- <div class="nav-wrapper teal lighten-2">
            <a href="" class="brand-logo center">
                <i class="material-icons"></i>
            Mexflix</a>
            <nav>
    -->
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Mexflix</a>
      <?php
        if(isset($_SESSION['user'])){
        echo '<a style="padding-left: 120px;" href="" class="">Usuario: '. $_SESSION['user']."</a> ";
        }
      ?>
      
  <?php    
      if($_SESSION['iniciada'])
{
	print('
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./">inicio</a></li>
        <li><a href="movieseries">Movieseries</a></li>
        <li><a href="usuarios">Usuarios</a></li>
        <li><a href="estatus">Estatus</a></li>
        <li><a href="salir">Salir</a></li>
      </ul>
    </div>

    php
  </nav>

  <ul class="sidenav" id="mobile-demo">
      <li><a href="./">inicio</a></li>
      <li><a href="movieseries">Movieseries</a></li>
      <li><a href="usuarios">Usuarios</a></li>
      <li><a href="estatus">Estatus</a></li>
      <li><a href="salir">Salir</a></li>
  </ul>
   
   ');
    }
    
?>
</div>
</nav>