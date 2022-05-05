<!--SESIONES = SON MÉTODOS DE SEGURIDAD QUE SE QUEDAN ALOJADAS EN EL SERVIDOR -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones con php</title>
</head>
<body>

    <form action="2_control.php" method="get" name="form">

        <?php
        if ($_GET) {

            // SE CREA LA VARIABLE DE, SI LA VARIABLE ERROR ES TRUE, AGREGAR UN MENSAJE DE ERROR.
            // ESTO SE VERIFICA CON EL DOCUMENTO 2_control.php
            if ($_GET['error'] == "si") {
                echo "<h2 style=\"color: red;\">Confirma tus datos</h2>";
            }
        }
        ?>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="password" name="contraseña" placeholder="Contraseña">
        <input type="submit" value="Continuar" name="enviar">
    </form>

</body>

</html>