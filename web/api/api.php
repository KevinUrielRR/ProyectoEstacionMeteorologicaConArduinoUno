<?php
include "../database/database.php";
error_reporting(0);
//$a = $_GET['a'];
//$b = $_GET['b'];

//try{
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
//xi;





//try{
//error_reporting(0);
//throw new Exception("KU");
//error_reporting(0);
 

//error_reporting(0);


/*
echo "b: " . $_GET['humedad_ambiente'];

echo "luz: " . $_GET['luz'];

echo "aire: " . $_GET['aire'];

echo "presipitacion: " . $_GET['presipitacion'];
echo "humo: " . $_GET['humo'];*/

//}catch(Exception $e){echo $e->getMessage();}//finally{echo "k";}


$get_name = ['humedad_ambiente', 'luz', 'aire', 'presipitacion', 'humo'];
$get_request = [$_GET['humedad_ambiente'], $_GET['luz'], $_GET['aire'], $_GET['presipitacion'], $_GET['humo']];
?>

<textarea style="width:100%; height:100%;">
<?php
echo "datos {\n";


for($var = 0; $var <= 4; $var++)
{
echo "request [" . $var . "] { \n";
echo "variable/dato:" . $get_name[$var] . ", resultado/valor: " . $get_request[$var] ."\n";
echo "}\n";
}

//echo" datos enviados a la base de datos: ". $database ." : " . "<". $get_name[0] . ">";
echo "}";
?>
</textarea>
<?php
}
echo x();

$host = 'localhost:3306';
$database = 'registros_meteox';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$database;charset=utf8";
$uu = new PDO($dsn,$user,$password);
/*class ku
{

}*/

//$uu = new ku();

//$uu = new PDO("","","");
$query = "INSERT INTO temperatura(grados, hora, lugar) VALUES ('".$_GET['temperatura']."', '2026-07-05 20:04:15.000000', ST_GeomFromText('POINT(0 0)',0));";
$query_success = $uu->query($query);

$query = "INSERT INTO humedad(cantidad, hora, lugar) VALUES ('".$_GET['humedad']."', '2026-07-05 20:04:15.000000', ST_GeomFromText('POINT(0 0)',0));";
//$query = "INSERT INTO temperatura(grados, hora, lugar) VALUES (00000', ST_GeomFromText('POINT(0 0)',0));";
$query_success = $uu->query($query);

//exec("mariadb -u root -p root");
//exec("use registros_meteox;");
//exec("INSERT INTO `temperatura` (`grados`, `hora`, `lugar`) VALUES ('".$_GET['a']."', '2026-05-05 13:51:27', ST_GeomFromText('POINT(0 0)',0));");
//}catch(Exception $e){}
?>
