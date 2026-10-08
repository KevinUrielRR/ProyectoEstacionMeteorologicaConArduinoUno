<h1 style="color: red;">
<?php
$fwopen = fopen('../datos_enviados/temperatura.txt','r');
echo fread($fwopen,128);
fclose($fwopen);
?>

<?php

?>
</h1>

<a id="a" href="temperatura.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>
