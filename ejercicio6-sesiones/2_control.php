<?php

// SI LOS DATOS SON VERDADEROS, ENTONCES...
if ($_GET['nombre']=="santiago" && $_GET['contraseña']==1234) {
    // SE INICIA LA SESIÓN
    session_start();

    // DECLARAR VARIABLES DENTRO DE LA SESIÓN

    $_SESSION['autentificado'] = true;
    $_SESSION['usuario'] = $_GET['nombre'];
    echo $_SESSION['usuario'];

    header("location: 5_archivoProtegido.php");

} 
// SI LOS DATOS SON EQUIVOCADOS SE REDIRECCIONA A LA PÁGINA CON EL MENSAJE DE ERROR
else {
    header('location: 1_index.php?error=si');
}




?>