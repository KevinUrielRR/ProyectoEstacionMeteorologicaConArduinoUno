<h1 style="color: #cfcfcf;">
<?php
$fwopen = fopen('../datos_enviados/humedad_superficie.txt','r');
echo fread($fwopen,128);
fclose($fwopen);
?>
</h1>

<a id="a" href="humedad_superficie.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>
