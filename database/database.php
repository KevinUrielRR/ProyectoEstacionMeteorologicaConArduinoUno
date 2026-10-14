<?php

$host = 'localhost:3306';
$database = 'registros_meteocs';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$database;charset=utf8";
$uu = new PDO($dsn,$user,$password);
date_default_timezone_set("America/Mexico_City");
$query =" INSERT INTO temperatura(grados,fecha,hora) VALUES("."'".$_GET['temperatura']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";


$query_success = $uu->query($query);



$query =" INSERT INTO humedad_ambiente(porcentaje,fecha,hora) VALUES("."'".$_GET['humedad_ambiente']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
$query_success = $uu->query($query);

$query =" INSERT INTO humedad_superficie(porcentaje,fecha,hora) VALUES("."'".$_GET['humedad_superficie']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
$query_success = $uu->query($query);

$query =" INSERT INTO luz(cantidad,fecha,hora) VALUES("."'".$_GET['luz']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
$query_success = $uu->query($query);

$query =" INSERT INTO calidad_aire(ppm,fecha,hora) VALUES("."'".$_GET['aire']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
$query_success = $uu->query($query);

$query =" INSERT INTO cantidad_humo(pm,fecha,hora) VALUES("."'".$_GET['humo']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
$query_success = $uu->query($query);

$query =" INSERT INTO precipitacion(mm,fecha,hora) VALUES("."'".$_GET['precipitacion']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
$query_success = $uu->query($query);

?>