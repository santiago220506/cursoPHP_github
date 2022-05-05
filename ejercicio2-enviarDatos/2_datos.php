<?php
    // CUANDO ENVIAMOS DATOS A UNA WEB SE PUEDEN CREAR DOS TIPOS DE VARIABLES: $_GET Y $_POST

    if($_GET){ // AQUÍ DECIMOS QUE, SI SE CREA LA VARIABLE GET Y ES TRUE, HACER ALGO
        $nombre = $_GET['nombreUsuario_txt']; // AQUÍ AGARRO EL VALOR DEL NOMBRE COMO UN ARREGLO, SIENDO EL PADRE $_GET
        echo "Hola $nombre"; 
    }

    if($_POST){
        $nombre = $_POST['nombreUsuario_txt'];
        $contraseña = $_POST['passwordUsuario_txt'];
        echo "Hola $nombre con contraseña $contraseña";
    }

?>