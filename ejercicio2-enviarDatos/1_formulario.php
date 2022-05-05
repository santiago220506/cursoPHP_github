<?php



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!-- 'action' DICE A DÓNDE VAN A IR LOS DATOS. 'method' LA FORMA EN QUE VAN A SER ENVIADOS
    'name' ES EL NOMBRE DEL FORMULARIO. 'enctype' LA FORMA EN QUE LOS DATOS VAN A SER ENCRIPTADOS
    -->
    <form action="2_datos.php" method="GET" name="form" enctype="application/x-www-form-urlencoded">
        <hgroup><h2>Método get</h2></hgroup>
        <input type="text" name="nombreUsuario_txt" placeholder="Ingresa tu Nombre: ">
        <br>
        <br>
        <input type="password" name="passwordUsuario_txt" placeholder="Ingresa tu contraseña: ">
        <br>
        <input type="submit" value="Enviar" name="enviarBtn">



    </form>
    <form action="2_datos.php" method="POST" name="form" enctype="application/x-www-form-urlencoded">
        <hgroup><h2>Método post</h2></hgroup>
        <input type="text" name="nombreUsuario_txt" placeholder="Ingresa tu Nombre: ">
        <br>
        <br>
        <input type="password" name="passwordUsuario_txt" placeholder="Ingresa tu contraseña: ">
        <br>
        <input type="submit" value="Enviar" name="enviarBtn">



    </form>


</body>

</html>