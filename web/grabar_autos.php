<?php
include_once '../controlador/DaoAuto.php';
include_once '../modelo/auto.php';

$patente=$_POST["txtPatente"];
$dueno=$_POST["txtDueno"];
$modelo=$_POST["txtModelo"];
$marca=$_POST["txtMarca"];
$ano=$_POST["txtAno"];


$auto=new Auto();
$auto->setPatente($patente);
$auto->setDueno($dueno);
$auto->setModelo($modelo);
$auto->setMarca($marca);
$auto->setAno($ano);


$dao=new DaoAuto();
$filas_afectadas=$dao->Grabar($auto);
if ($filas_afectadas>0) {
    echo 'Grabo';
} else {
    echo 'No Grabo';
}
/* 
 * 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

