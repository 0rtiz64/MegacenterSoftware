<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 12/4/2019
 * Time: 8:43 AM
 */
include '../functions/conexion.php';
include '../functions/menus.php';
$usuario =  $_POST["phpUsuario"];
$password = $_POST["phpPassword"];

$confirmar = mysqli_num_rows(mysqli_query($enlace,"SELECT * from usuarios where usuarios.usuario = '".$usuario."' AND usuarios.`password` ='".$password."' AND usuarios.estado =1  "));

if($confirmar ==0){
    echo 100;
}else{
$queryDatosUsuario = mysqli_query($enlace,"SELECT personal.nombre,personal.celOficina,usuarios.tipo_accesso,puestos.nombre  as puesto,usuarios.idUsuario from usuarios 
INNER JOIN personal on usuarios.idPersonal = personal.idPersonal
INNER JOIN puestos on personal.idPuesto = puestos.idPuesto
where usuarios.usuario ='".$usuario."' AND usuarios.`password` ='".$password."' AND usuarios.estado =1");
$datosUsuario = mysqli_fetch_array($queryDatosUsuario,MYSQLI_ASSOC);

$nombre = $datosUsuario["nombre"];
$cel= $datosUsuario["celOficina"];
$tipoAcceso= $datosUsuario["tipo_accesso"];
$puesto= $datosUsuario["puesto"];
$idUsuario= $datosUsuario["idUsuario"];
$menu= consultarMenu($tipoAcceso);

    session_start();
    $_SESSION['ingreso']='YES';
    $_SESSION['nombre']=$nombre;
    $_SESSION['cel']=$cel;
    $_SESSION['tipoAcceso']=$tipoAcceso;
    $_SESSION['puesto']=$puesto;
    $_SESSION['idUsuario']=$idUsuario;
    $_SESSION['menu']=$menu;
    echo $tipoAcceso;
}// FINAL  IF

?>