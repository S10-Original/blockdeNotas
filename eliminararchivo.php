<link rel="stylesheet" href="assets/styles.css">

<?php

$archi=$_REQUEST['SeleccioneArchivo'];

unlink("./notas/$archi");

echo "se elimino el archivo<br><br>";

echo "<a href='index.html'><input type='button' value='Regresar al inicio'></a>";
?>