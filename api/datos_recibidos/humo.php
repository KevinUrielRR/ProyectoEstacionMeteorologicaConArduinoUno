<h1 style="color: #00ccbb;">
<?php
$fwopen = fopen('../datos_enviados/humo.txt','r');
echo fread($fwopen,128);
fclose($fwopen);
?>
</h1>

<a id="a" href="humo.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>
