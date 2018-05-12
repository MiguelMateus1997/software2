<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingenieria de Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a style="color:#cacaca;" class="navbar-brand" href="index.html">Ingenieria de Software</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="CarColombia.html">Carreteras Colombia</a>
                    </li>
                    <li>
                        <a href="DepColombia.html">Deportes Colombia</a>
                    </li>
                    <li>
                        <a href="Inmo.html">Inmobiliaria</a>
                    </li>
                    <li>
                        <a href="Hos.html">Hospitales</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar Seci�n</a>
                    </li>
                 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/5.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Ingenieria de Software</h1>
                        <hr class="small">
                        <span class="subheading">es la aplicaci�n de un enfoque sistem�tico, disciplinado y cuantificable al desarrollo, operaci�n y mantenimiento de software, y el estudio de estos enfoques, es decir, el estudio de las aplicaciones de la ingenier�a al software.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row" >
                <div style="text-align:center;">
               Telefono: 5630452<BR>
WhatssApp: 3213361852  <BR>
 Email : miguel.mateusg@campusucc.edu.co<BR>
 Direccion: Calle 41 A # 72H - 26 Sur
                    <p class="copyright text-muted">Copyright &copy; MiguelinProduction</p>
            </div>
                    </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesi�n</h2>
        </div>
        <div class="modal-body">
          <form action="destino.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="Datos_usuario" class="form-control" id="control1_nombre" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="control1_contrase�a">Contrase�a</label>
              <input type="password" name="Datos_contrase�a" class="form-control" id="control1_contrase�a" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Ingresar</button>
          </form>
        </div>
    </div>
  </div>
</div>
    
      <!--modal para registrarse-->
    
    

    
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>