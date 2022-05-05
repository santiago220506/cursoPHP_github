<?php


//VARIABLE GLOBAL COOKIE QUE SE CREA CUANDO EXISTEN COOKIES

// SI EL VALOR 'idiomaSolicitado' DEL ARREGLO $_COOKIE ES FALSE ENTONCES REDIREC
if(!$_COOKIE['idiomaSolicitado']){
    header("location: 1_pedirIdioma.php");
}

// SI EL VALOR 'idiomaSolicitado' ES 'es' (la variable que tenemos en los links de
//1_pedirIdioma) ENTONCES REDIRECCIONAME A...
// ASÍ MISMO CON LA VERSIÓN EN INGLÉS

elseif($_COOKIE['idiomaSolicitado'] == 'es'){
    header("location: 3_espanol.php");
}
elseif($_COOKIE['idiomaSolicitado'] == 'en'){
    header("location: 2_ingles.php");
}


?>