<?php
include "functions/conexion.php";
$idUsuario= $_GET['idUsuario'];

if($idUsuario == ""){
    header("location: ./");
}

$queryDatosUsuario = mysqli_query($enlace,"SELECT personal.nombre,personal.celOficina,usuarios.tipo_accesso,puestos.nombre  as puesto,usuarios.idUsuario,usuarios.usuario from usuarios 
INNER JOIN personal on usuarios.idPersonal = personal.idPersonal
INNER JOIN puestos on personal.idPuesto = puestos.idPuesto
where usuarios.idUsuario = $idUsuario");
$datosUsuario = mysqli_fetch_array($queryDatosUsuario,MYSQLI_ASSOC);

$nombre = $datosUsuario["nombre"];
$usuario= $datosUsuario["usuario"];
$cel= $datosUsuario["celOficina"];
$tipoAcceso= $datosUsuario["tipo_accesso"];
$puesto= $datosUsuario["puesto"];
$idUsuario= $datosUsuario["idUsuario"];

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MEGACENTER</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/MisImg/logoMegacenter/favicon.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="form-signin-wrapper lock-screen-v1">

      <div class="container">

        <form class="form-signin">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">
                      <?php echo '<img src="asset/MisImg/usuarios/'.$idUsuario.'" class="img-responsive img-circle" />';?>
                  </h1>
                  <p class="atomic-mass"><?php echo $nombre?></p>
                  <p class="element-name"><?php echo $puesto?></p>
                  <input type="hidden" class="form-text" value="<?php echo $usuario ?>" id="inputUsuario">
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">

                    <input type="password" style="text-decoration-style: " class="form-text" id="inputPassword">
                      <input type="submit" class="collapse" onclick="loginLock();">
                    <span class="bar"></span>
                    <label>INGRESE PASSWORD</label>
                  </div>

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
      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script src="asset/js/sweetalert.js"></script>
      <script src="controllers/login.js"></script>
      <script type="text/javascript">

          $(document).ready(function () {
              $("input:submit").click(function () {
                  return false;
              });


          });



     </script>
     <!-- end: Javascript -->
   </body>
   </html>