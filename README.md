Esta Estación Meteorologica (Lite) visualiza los datos recibidos haciendo uso de un conjunto de componentes conectados a Arduino Uno. 
El proyecto escolar consistió en hacer una estación meteorologica sencilla usando un conjunto de componentes compatibles con tecnologia Arduino UNO, haciendo la recoleccion de datos con un mínimo de dos parametros, principalmente temperatura y humedas. Pero se continuo el desarrollo de el proyecto, y como resultado, se hizo mejoras y mas implentaciones dando solución a el desarrollo de software con interaccion Wi-Fi y Arduino UNO

Figura 1.1 y Figura 1.2: Hardware para la realización del proyecto.

Figura 2.1 y Figura 2.2: Las herramientas utilizadas para la elaboración de la página web que visualizarla los parámetros.
nombre de la página web: Estación Meteorologica (Lite).

Figura 3.1 y 3.2: Ejemplo de base de datos para hacer registros enviados desde página web.
Guarda el parámetro que es enviado desde la página web, asi como el hora y 
fecha en que se guardó



# | Hardware utilizado |

___

| envio y recepcion de datos |
| --- |

| Tecnologia | Modelo/Nombre |
| --- | --- |
| Arduino | Arduino UNO |
| Modulo Wi-Fi | esp01 (basado en es esp8266) |

Figura 1.1. Hardware principal para la conexión con la página web

| sensores |
| --- |

| Medición | Sensor | pines | utilizado |
| --- | --- | --- | --- |
| temperatura | dth11 | 3 | √ (Lite) |
| humedad del ambiente | dth11 | 3 | √ (Lite) |
| calidad del aire | mq135 | 4 | x (posible implementación a futuro) |
| sensor de luz | tsl2561-gy256 | 5 | x (posible implementación a futuro) |
| humedad del suelo | fc-28 | 2 | x (posible implementación a futuro) |
| humo | mq7 | 4 | x (posible implementación a futuro) |
| precipitacion | fc37 | 2(el sensor) y 6(4 de datos/corriente  y 2 de conexion a sensor) | x (posible implementación a futuro) |
| presión admosferica | BMP180 GY-68 | 4 | x (posible implementación a futuro) |
| particulas de ozono | mq131 | 4 | x (posible implementación a futuro) |

Figura 1.2. Componentes de hardware necesarios para la medición de parámetros

___

# | Desarrollo del Software |

___

| Programacion |
| --- |

| Lenguaje de Programacion | Actividad |
| --- | --- |
| PHP | comunicacion con base de datos ; api |
| SQL | base de datos |
| HTML | vistas de pagina web |
| Javascript | eventos ; creacion de ventanas |
| CSS | estilos para el index |
| C++ | codigo Arduino UNO |

Figura 2.1. Software que se utilizó para el desarrollo de la página web

| Construcción de Sistema |
| --- |

| Titulo | lugar de codigo almacenado |
| --- | --- |
| interfaz grafica | gui.php |
| api | api.php |
| pantalla de inicio | index.php |
| comunicacion con base de datos | database.php |

Figura 2.2. archivos donde se almacenaron los códigos 

___



<!-- ** Figura 1.1. Software utilizado y gestión de archivos -->




# | BASE DE DATOS |

<br>

___

| SOFTWARE | Utilidad | Actividad |
| --- | --- | --- |
| MariaDB | Sistema Gestor de Base de Datos | uso de servidor para guardar los datos |
| phpMyAdmin | Aplicación Web para la gestión de bases de datos | uso de exportación del archivo sql |

Figura 3.1. Herramientas para la gestión de la base de datos

___

<br>

___


| NOMBRE | registros_meteocs |
| --- | --- |

## CONTENIDO
| TABLAS | parametro |
| --- | --- |
| temperatura | grados |
| humedad_ambiente | porcentaje |
| humedad_suelo | porcentaje |
| cantidad_humo | pm |
| calidad_aire | ppm |
| precipitacion | mm |
| luz | cantidad |

Figura 3.2. Contenido de la base de datos

___