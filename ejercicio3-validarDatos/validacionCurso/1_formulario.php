<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="2_validarDatos.php" name="form" method="GET" enctype="application/x-www-form-urlencoded" class="form">
        <legend class="form__titulo">Formulario con datos GET</legend>
        <input class="form__input form__input-txt form__input--nombre" type="text" name="nombre_txt" placeholder="Nombre">
        <input class="form__input form__input-txt form__input--password" type="password" name="password_txt" placeholder="Contraseña">
        <input type="hidden" name="input_hdn" value="GET">
        <input class="form__input form__input--btn" type="button" name="enviar_btn" value="Enviar">
        

        <!-- EL INPUT DE TIPO SUBMIT ENVÍA LOS DATOS AUTOMATICAMENTE. EL INPUT DE TIPO BUTTON NO LO HACE AUTOMÁTICAMENTE
        SINO MANUALMENTE. POR ESO ESTE FUNCIONA PARA VALIDAR DATOS CON JS
        -->
    </form>

    <script src="index.js"></script>
</body>

</html>