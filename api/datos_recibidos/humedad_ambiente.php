<h1 style="color: brown;">
<?php
$fwopen = fopen('../datos_enviados/humedad_ambiente.txt','r');
echo fread($fwopen,128);
fclose($fwopen);
?>
</h1>

<a id="a" href="humedad_ambiente.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>
