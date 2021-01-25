<?php
session_start();

include_once 'Controladores/enrutadorRuina.php';
include_once 'Controladores/controladorRuina.php';
?>

<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="login">

    <div class="container margin_30">
        <div class="row">
            <div class="col-md-12">
                <p><img src="img/Sin título-1.png" width="377" height="150" alt="" class="img-responsive" style="margin:auto;">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2 col-sm-6">
                <div class="box_login">
                    <strong><i class="icon_key_alt"></i><h3>Ingreso al Sistema</h3></strong>
                    <div class="form-group">
                        <input type="text" class=" form-control " placeholder="Usuario">
                        <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                    </div>
                    <div class="form-group" style="margin-bottom:5px;">
                        <input type="text" class=" form-control" placeholder="Contraseña" style="margin-bottom:5px;">
                        <span class="input-icon"><i class="icon_lock_alt"></i></span>
                    </div>
                    <p class="small">
                        <a href="#">Olvidaste tu Contraseña?</a>
                    </p>
                    <button class="button_login">Ingresar</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box_login">
                    <strong><i class="icon_lock-open_alt"></i><h3>Crear Nueva Cuenta</h3></strong>
                    <form>
                        <div class="form-group">
                            <input type="text" class=" form-control required" placeholder="Usuario">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class=" form-control required" placeholder="Email">
                            <span class="input-icon"><i class="icon_mail_alt"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class=" form-control required" id="password1" placeholder="Contraseña">
                            <span class="input-icon"><i class="icon_lock_alt"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class=" form-control required" id="password2" placeholder="Confirmar Contraseña">
                            <span class="input-icon"><i class="icon_lock_alt"></i></span>
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="button_login">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12 text-center">
                © JPSolutions 2021 - Politicas Registrados.
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="assets/validate.js"></script>
    <script src="js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/pw_strenght.js"></script>
</body>

</html>