<?php
include "../backend/configuracion.php";


function create_button(){

$db_on = fopen('../database/database_on.ini','r');
$db = fread($db_on,128);

$var = '<input id="checkbox_envio" name="envio" type="checkbox" />';
//function load_bd_on()
//{
if ($db=="true") { return '<input id="checkbox_envio" name="envio" type="checkbox" checked />';echo"K"; }
else { return '<input id="checkbox_envio" name="envio" type="checkbox" />'; echo"KU";}
//}

//load_bd_on();
}

create_button();

//echo '
?>
<html>
<body>

<form action="menu.php" method="post">
<textarea disabled style="width:100%; height:35px; font-size:10px;">METEOCS
MiniMeteorologica Estacion Transportable ElectronicoEmbebido con Opcion Controlado con Sistema por WiFi</textarea>
<br>
<label for="estilo">ESTILO </label>
<select name="estilo">
<option>CLARO</option>
<option>OSCURO</option>
<!--<option>PERSONALIZADO</option>-->
</select>

<br>
<br>
<p>PARAMETROS</p>
<label for="temperatura">temperatura<label style="color:white;">_______</label></label><input id="checkbox_temperatura" name="temperatura" type="checkbox" checked=true />
<br>
<label for="humedad_ambiente">humedad ambiente</label><input id="checkbox_humedad_ambiente" name="humedad_ambiente" checked=true type="checkbox" />
<br>
<label for="humedad_superficie">humedad superficie</label><input id="checkbox_humedad_superficie" name="humedad_superficie" checked=true  type="checkbox" />
<br>
<label for="luz">luz<label style="color:white;">________________</label></label><input id="checkbox_luz" name="luz" checked=true  type="checkbox" />
<br>
<label for="calidad_aire">calidad del aire<label style="color:white;">____</label></label><input id="checkbox_calidad_aire" name="calidad_aire" checked=true type="checkbox" />
<br>
<label for="cantidad_humo">cantidad de humo<label style="color:white;">_</label></label><input id="checkbox_cantidad_humo" checked=true name="cantidad_humo" type="checkbox" />
<br>
<label for="precipitacion">precipitacion<label style="color:white;">______</label></label><input id="checkbox_precipitacion" checked=true  name="precipitacion" type="checkbox" />

<br>
<br>

<p>BASE DE DATOS</p>
<label for="envio">Enviar datos<label style="color:white;">_______</label></label>

<?php echo create_button(); ?>


<br>
<label for="nombre">Nombre</label><input id="text_nombre" name="nombre" type="text" />
<br>
<label for="tiempo">Tiempo</label><input id="text_tiempo" name="tiempo" type="text" />
<br>
<label for="cambios">Guardar cambios</label><input id="button_submit" name="cambios" type="submit" onclick="JavaScript:alert('√')"/>

</form>

<link rel="stylesheet" href="tag_form.css"></link>


</body>
</html>

