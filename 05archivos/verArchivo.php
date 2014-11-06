<?php
  // Definimos la ruta del directorio privado.
  $ruta = '/Library/WebServer/aver';
  // El nombre del archivo que se desea servir, lo obtendremos
  // mediante el parametro 'archivo' que luego sera pasado por la URI
  $file = isset($_GET['archivo']) ? "$ruta/{$_GET['archivo']}" : NULL;
  //Verificamos el valor de $file
  //Si no es NULL, verificamos si el archivo existe antes de proceder 
  if(!is_null($file)) {
    if(file_exists($file)) {
      // Creamos un recurso fileinfo para obtener el tipo MIME
      $resource = finfo_open(FILEINFO_MIME_TYPE);
      // Obtenemos el tipo MIME
      $mimetype = finfo_file($resource, $file);
      // Cerramos el recurso
      finfo_close($resource);
      // Modificamos los encabezados HTTP
      header("Content-Type: $mimetype");
      // Leemos y mostramos el archivo
      readfile($file);
    }
  }