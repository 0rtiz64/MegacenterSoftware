<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 22/4/2019
 * Time: 4:20 PM
 */
include '../functions/conexion.php';
$idBuscador =$_POST["idBuscador"];
$select=$_POST["select"];

$selectCreado ='';
switch ($select){
    case "modelos":
        $selectCreado.='<select class="form-control" id="selectModelos" > <option value="0">MODELOS</option> <option value="">NUEVO MODELO</option>';

        $queryMarcas = mysqli_query($enlace,"SELECT * from modelos WHERE idMarca = $idBuscador and estado = 1 GROUP BY modelo ASC");
        while ($datosMarcas=mysqli_fetch_array($queryMarcas,MYSQLI_ASSOC)){
                $selectCreado.='<option value="'.$datosMarcas["idModelo"].'">'.utf8_encode($datosMarcas["modelo"]).'</option>';
        }
        $selectCreado.='</select>';

        break;
    default:

        break;
}

echo $selectCreado;

?>