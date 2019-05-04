<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 3/5/2019
 * Time: 2:35 PM
 */
include '../functions/conexion.php';
$phpMarca = $_POST["phpMarca"];
$fechaentrada = date('Y-m-d  h:i:s');

$validar = mysqli_num_rows(mysqli_query($enlace,"SELECT * from marcas WHERE marca = '".$phpMarca."'"));

if($validar>0){
    echo 1;
}else{
    $queryInsertar = mysqli_query($enlace,"insert into marcas (marca,f_creacion,estado) values 
	('".$phpMarca."','".$fechaentrada."',1)");
    $select =' <select class="form-control" id="selectMarcaRegistrarEquipo">
                                          <option value="0">MARCA</option>
                                          <option value="">NUEVA MARCA</option>';



                                          $queryMarcas =mysqli_query($enlace,"SELECT * from marcas where estado = 1 GROUP BY marca ASC");
                                          while ($datosMarcas = mysqli_fetch_array($queryMarcas,MYSQLI_ASSOC)){
                                              $select.='  <option value="'.$datosMarcas["idMarca"].'">'.utf8_encode($datosMarcas["marca"]).'</option>';
                                          }
                                      $select.='</select>';
                                          echo $select;
}

?>