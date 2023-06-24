<link rel="stylesheet" href="assets/styles.css">

<?php
echo "<div class='filaphp'>";
    echo "<div class='columnaphp'>";
    $archi=$_REQUEST['SeleccioneArchivo'];

    $prueba = fopen("./notas/$archi","r") or die ("Error");
    echo "<h2>Informacion del archivo $archi</h2><br>";
    
    while(!feof($prueba)){
        $texto=fgets($prueba);

        echo "<h4>$texto</h4><br>";
    }

    echo "<a href='index.html'><input type='button' value='Regresar al inicio'></a>";

    echo "</div>";


    echo "<div class='columnaphp'>";
    echo "<h2>Insertar la informacion a sustituir</h2><br>";
    echo "<form class='formphp' action='modificarArchivo.php' method='post'>";

    echo "<input type='hidden' name='nombre' id='idnombre' value='$archi'>";

    echo "<label for='idasunto'>Asunto:</label> <br>";
    echo "<input class='seleccionTXTinputs' type='text' name='asunto' id='idasunto' required> <br><br>";

    echo "<label for='iddescripcion'>Descripcion:</label> <br>";
    echo "<textarea name='descripcion' id='iddescripcion' rows='10' cols='30' required></textarea> <br><br>";

    echo "<input type='submit' name='boton' value='Guardar cambios'>\n
    </form>";
    echo "</div>";

echo "</div>";






?>