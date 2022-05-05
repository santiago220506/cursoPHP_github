<!-- LAS COOKIES SON INFORMACIÓN QUE SE GUARDA EN EL NAVEGADOR DEL USUARIO Y NOS PERMITE GUARDAR 
CIERTAS PREFERENCIAS DE UN USUARIO 

UN EJEMPLO TÍPICO ES EL IDIOMA DE UNA PLATAFORMA, EN DONDE, DE ACUERDO AL PAÍS QUE SE ELIJA EN EL INICIO DE
SESIÓN, TE MUESTRA EL CONTENIDO EN UN IDIOMA U OTRO

-->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Bienvenido a tus cookies</h1>
<br>
<a href="5_grabar.php?idioma=es">Versión en español</a>

<!-- idioma = es una variable al igual que idioma = en-->
<br>
<a href="5_grabar.php?idioma=en">Versión en inglés</a>
</body>
</html>


<?php

// TODO ESTO EXPLICADO EN EL DOCUMENTO 6_USAR.PHP

if($_COOKIE){
    if($_COOKIE['idiomaSolicitado'] == 'es'){
        header("location: 3_espanol.php");
    }
    elseif($_COOKIE['idiomaSolicitado'] == 'en'){
        header("location: 2_ingles.php");
    }
    
}

?>