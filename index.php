<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEGACENTER</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="asset/MisImg/logoMegacenter/favicon.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="mimin" class="dashboard form-signin-wrapper">

<div class="container" >

    <form class="form-signin" " >
        <div class="panel periodic-login" align="center">

            <div class="panel-body text-center">
                <div style="margin-bottom: 10%">
                    <img src="asset/MisImg/logoMegacenter/MEGACENTER%20LOGO.png" style="width:230px;height: 150px;">
                </div>

                <p class="atomic-mass">MEGACENTER</p>
                <p class="element-name">BETA</p>

                <i class="icons icon-arrow-down"></i>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="inputUsuario" autocomplete="off">
                    <span class="bar"></span>
                    <label>USUARIO</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" id="inputPassword" autocomplete="off">
                    <span class="bar"></span>
                    <label>PASSWORD</label>
                </div>
                <input type="button" class="btn col-md-12" value="INICIAR SESION" onclick="login();"/>
                <input type="submit" class="collapse" value="INICIAR SESION" onclick="login();"/>
            </div>
            <div class="text-center" style="padding:5px;">
                <a href="#">MEGACENTER S.A </a>
                <a href="#">| GRUPO MEGABYTE</a>
            </div>
        </div>
    </form>

</div>

<!-- end: Content -->
<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/icheck.min.js"></script>

<!-- custom -->
<script src="asset/js/main.js"></script>
<script src="asset/js/sweetalert.js"></script>
<script src="controllers/login.js"></script>
<!-- end: Javascript -->
</body>
</html>