<link rel="stylesheet" href="assets/styles.css">

<?php

$nombre=$_REQUEST['nombre'];

$archivo= fopen("./notas/$nombre","w+") or die ("Error al crear el archivo");

$asunto=$_REQUEST['asunto'];
$descripcion=$_REQUEST['descripcion'];

fwrite($archivo,$asunto);
fwrite($archivo,"\n\n");
fwrite($archivo,$descripcion);
fwrite($archivo,"\n");
echo "Se modifico correctamente el archivo de texto<br><br>";
echo "<a href='index.html'><input type='button' value='Regresar al inicio'></a>";
?>