<?php

$host = 'localhost:3306';
$database = 'registros_meteocs';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$database;charset=utf8";
$uu = new PDO($dsn,$user,$password);
date_default_timezone_set("America/Mexico_City");
$query =" INSERT INTO temperatura(grados,fecha,hora) VALUES("."'".$_GET['temperatura']."'".","."'".date("Y-m-d")."'".","."'".date("H:m:s")."'".");";
//$query =" INSERT INTO temperatura(grados,fecha,hora) VALUES("."'".$_GET['temperatura']."'".","."'".date("Y-m-d")."'".","."'".substr(time(),0,2).":".substr(time(),2,2).":".substr(time(),4,2)."'".");";
//$uu = new PDO("","","");
//$query ="INSERT INTO temperatura(grados,hora) VALUES('".$_GET['temperatura']."','ku');";
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
/*$query = "INSERT INTO humedad(cantidad, hora, lugar) VALUES ('".$_GET['humedad']."', '2026-07-05 20:04:15.000000', ST_GeomFromText('POINT(0 0)',0));";
//$query = "INSERT INTO temperatura(grados, hora, lugar) VALUES (00000', ST_GeomFromText('POINT(0 0)',0));";
$query_success = $uu->query($query);*/

//exec("mariadb -u root -p root");
//exec("use registros_meteox;");
//exec("INSERT INTO `temperatura` (`grados`, `hora`, `lugar`) VALUES ('".$_GET['a']."', '2026-05-05 13:51:27', ST_GeomFromText('POINT(0 0)',0));");
//}catch(Exception $e){}
?>