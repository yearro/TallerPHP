<?php
#esta variable recoge el nombre del fichero a visualizar
$fichero="ingreso.pdf";
#esta funci�n determina la longitud en bytes del fichero
$len = filesize($fichero);
/* esta cabecera -v�lida para HTTP/1.1- ordena al navegador
que no permita guardar la p�gina
que no permita que se almecene en la cach� del cliente*/
header("Cache-Control: no-store, no-cache, must-revalidate");
/* esta otra cabecera -v�lida para HTTP/1.0
indica al navegador que no guarde la p�gina en la cach� del cliente
he puesto ambas opciones para cubrir todo el especto probable */
header("Pragma: no-cache");
/* esta cabecera especifica al navegador el contenido
que va a recibir que en este caso no ser�a otra cosa
que algo que requiere una aplicacion capaz de interpretar
ficheros pdf */
header("Content-type: application/pdf");
/* como la norma de los headers establece que
siempre que se conozca el tama�o del contenido enviado
se incluya en la cabecera ese contenido, pues...
incluimos el tama�o ya que "filesize" nos midi� el fichero
y guardo esa medida en la variable $len...
pero... fue posible utilizar esa funci�n antes de las header
porque esa medida no fue mandada a la salida...
si hubi�ramos escrito antes de los header... algo as� como
Echo $len; ... la habr�amos fastidiado...
ya habr�amos tenido error en las cabeceras...*/
header("Content-Length: $len");
/* con esta otra header indicamos ls forma de presentaci�n de
el contenido del documento... permite dos posibilidades
inline (la que he puesto aqu�) o
attachment (que seria como fichero anexo)
fijate que en este "header" he puesto en filename un nombre distinto
del que ten�a el fichero original... eso no tiene importancia
solo ser� el nombre con el que se guardar� en la cach� del cliente
en el caso de que no hubi�ramos incluido la cabecera "no cache"
que dicho sea de paso... la he puesto aqu� como ejemplo
pero que ser�an absolutamente innecesarias para este ejemplo
de visualizaci�n del documento */
header("Content-Disposition: inline; filename=felipe.pdf");
/* ya se acabaron las cabeceras del documento
aqu� le decimos al servidor que lea el fichero y lo envie
al navegador del cliente... este ya lo interpretar�
siguiendo las especificaciones que le hemos incluido
las cabeceras....*/
readfile($fichero);?>