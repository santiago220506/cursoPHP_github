<?php

$nombre = "Santiago";
$password = "Hola";
if($_GET){
    $name = $_GET['nombre_txt'];
    echo $name;
}
// if($nombre != "sebas"){
//     header("location: 1_formulario.php?error=si");
//     DE ESTA MANERA REDIRIGIMOS UN FORMULARIO. DESPUÉS DEL "location: " VA LA URL A LA QUE QUIERE IR LA REDIRECCIÓN
//     Y LUEGO SI SE QUIERE AÑADIR MÁS CONTENIDO A SU URL
// }
?>