<link rel="stylesheet" href="assets/styles.css">

<?php
echo "<h2><center>Eliminar archivo TXT</center></h2><br>";

echo "<h3>Introducir los datos solicitados:</h3><br>";

    

$thefolder = "notas/";
if ($handler = opendir($thefolder)) {
	echo "<ul>";
    while (false !== ($file = readdir($handler))) {
        if ($file != '.' && $file != '..'){

        echo "<form class='formhtml' method='post' action='eliminararchivo.php'>";

        echo "<label for='idSeleccioneArchivo'>Seleccione archivo a eliminar:</label><br><br>";

        echo "<li>$file  <input class='seleccionTXTinputs' type='submit' name='SeleccioneArchivo' id='idSeleccioneArchivo' value=$file></li> <br>";

        echo "</form>";
    }
}
    echo "</ul>";
    closedir($handler);
}

?>