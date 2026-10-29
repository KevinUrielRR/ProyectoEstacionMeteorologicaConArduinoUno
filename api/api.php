<?php
error_reporting(0);
$db_on = fopen('../database/database_on.ini','r');
$database_on = fread($db_on,128);

if ($database_on=="true")
{
include "../database/database.php";
} else { echo "no hay configuracion"; echo x();}


$fopen = fopen('datos_enviados/temperatura.txt','w');
fwrite($fopen,$_GET['temperatura']);
fclose($fopen);

$fopen1 = fopen('datos_enviados/luz.txt','w');
fwrite($fopen1,$_GET['luz']);
fclose($fopen1);

$fopen11 = fopen('datos_enviados/aire.txt','w');
fwrite($fopen11,$_GET['aire']);
fclose($fopen11);

$fopen12 = fopen('datos_enviados/precipitacion.txt','w');
fwrite($fopen12,$_GET['presipitacion']);
fclose($fopen12);

$fopen13 = fopen('datos_enviados/humo.txt','w');
fwrite($fopen13,$_GET['humo']);
fclose($fopen13);

$fopen_ = fopen('datos_enviados/humedad_superficie.txt','w');
fwrite($fopen_, $_GET['humedad_superficie']);
fclose($fopen_);

$fopen2 = fopen('datos_enviados/humedad_ambiente.txt','w');
fwrite($fopen2,$_GET['humedad_ambiente']);
fclose($fopen2);






function x()
{


$get_name = ['humedad_ambiente', 'luz', 'aire', 'presipitacion', 'humo','humedad_superficie','temperatura'];
$get_request = [$_GET['humedad_ambiente'], $_GET['luz'],$_GET['aire'], $_GET['presipitacion'], $_GET['humo'],$_GET['humedad_superficie'], $_GET['temperatura']];
?>

<textarea style="width:100%; height:100%;">
<?php
echo "datos\n{\n";

$parametro = [0,0,0,0,0,0,0];


for($var = 0; $var <= 6; $var++)
{


if(!(empty($get_request[$var])))
{
$parametro[$var] = $get_request[$var];
}else{ $parametro[$var] = "NULL"; }

echo "\nrequest [" . $var . "]\n{";
echo "\n    variable/dato:" . $get_name[$var] . ", resultado/valor: " . $parametro[$var] ."\n";
echo "}\n";
/*if (empty(get_request_print()))
{
break;
}*/

}




echo "\n}";
?>
</textarea>
<?php
}
/*
echo x();

$host = 'localhost:3306';
$database = 'registros_meteox';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$database;charset=utf8";
$uu = new PDO($dsn,$user,$password);



$query = "INSERT INTO temperatura(grados, hora, lugar) VALUES ('".$_GET['temperatura']."', '2026-07-05 20:04:15.000000', ST_GeomFromText('POINT(0 0)',0));";
$query_success = $uu->query($query);

$query = "INSERT INTO humedad(cantidad, hora, lugar) VALUES ('".$_GET['humedad']."', '2026-07-05 20:04:15.000000', ST_GeomFromText('POINT(0 0)',0));";

$query_success = $uu->query($query);
*/
?>
