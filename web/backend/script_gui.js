
var div00 = document.createElement("div");
div00.id = "div00";
div00.textContent = "METEOCS : Meteorologica Estacion con Tecnologia Embebida con Opcion de Control wifi Separado";
//Meteorologica Estacion Tecnologica Embebida con Opcion de 
div00.style.width = "50%";
div00.style.height = "50%";
div00.style.border = "1px border solid";
div00.style.top = "-50%";
div00.style.left = "25%";
div00.style.position = "absolute";
document.body.appendChild(div00);
var buttonk = document.getElementById("buttonk");

buttonk.addEventListener("click",function (){if(!(div00.style.top=="25%")){ div00.style.top = "25%";}else{div00.style.top = "-50%";} });
