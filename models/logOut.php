<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 12/4/2019
 * Time: 11:27 AM
 */
$boton=$_POST['boton'];
if ($boton=='cerrar')
{
    session_start();
    session_destroy();
}
?>