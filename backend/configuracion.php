<?php

if(!(empty($_POST['envio'])))
{
$fopen = fopen('../database/database_on.ini','w');
fwrite($fopen,"true");
fclose($fopen);
}
else{
$fopen = fopen('../database/database_on.ini','w');
fwrite($fopen,"false");
fclose($fopen);
}

?>
