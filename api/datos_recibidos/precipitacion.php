<h1 style="color: silver;">
<?php
$fwopen = fopen('../datos_enviados/precipitacion.txt','r');
echo fread($fwopen,128);
fclose($fwopen);
?>
</h1>

<a id="a" href="precipitacion.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>
