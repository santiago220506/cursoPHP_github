<?php


foreach($_FILES['archivo'] as $clave => $valor){
    echo "$clave --- $valor<br>";
}

$name = $_FILES['archivo']['name'] = rand(1, 10000000).".png";

echo "Nombre cambiado: ".$name;

$archivo = $_FILES['archivo']['tmp_name'];

$type = $_FILES['archivo']['type'];

if($type == "image/png" || $type == "image/jpeg"){
    echo "<br>Es una imagen";
} else {
    echo "<br>No es una imagen";
    echo "<br><a href=\"1_enviarArchivo.php\">Regresar</a>";
}


$destino = "archivos/".$_FILES['archivo']['name'];
// carpeta a la que se subirán los archivos/nombre con el que se van a subir los archivos

move_uploaded_file($archivo, $destino);

?>