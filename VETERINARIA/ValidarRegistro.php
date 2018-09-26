<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['nombre'])){
    $nombre=$_POST['Nombre'];
}
if(isset($_POST['apeliido'])){
    $apellido=$_POST['apeliido'];
}
if(isset($_POST['ciudad'])){
    $ciudad=$_POST['ciudad'];
}

try{
    require_once 'BD_Cconexion.php';
    $sql = "INSERT INTO `datosusers`(`nombre`,`apelldio`,`ciudad`)"
    .$sql="Values('{$nombre}','{$apellido}','{$ciudad}')";
    $resultado = $conn->query(sql);
    echo "Datos Ingresados Correctamente";
} catch (exception $ex){
    $error=$ex->getMessage();
}