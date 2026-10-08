<h1 style="color:blue;"><?php
$fwopen2 = fopen('../datos_enviados/luz.txt','r');
echo fread($fwopen2,128);
fclose($fwopen2);

//exec("mkdir uuuuu");
?></h1>
</b>

<a id="a" href="luz.php">

<script>
var a = document.getElementById('a');

setTimeout(()=>a.click(),1000);
</script>








