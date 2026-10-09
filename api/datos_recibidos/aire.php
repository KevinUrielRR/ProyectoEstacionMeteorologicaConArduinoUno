<h1 style="color: #aaaa00;">
<?php
$fwopen = fopen('../datos_enviados/aire.txt','r');
echo fread($fwopen,128);
fclose($fwopen);
?>
</h1>

<a id="a" href="aire.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>
