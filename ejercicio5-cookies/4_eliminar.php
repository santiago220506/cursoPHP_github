<?php


// NO HAY UNA FORMA OFICIAL DE BORRAS UNA COOKIE, PERO SI AL TIME LE RESTAMOS 
// LA COOKIE YA NO EXISTE
setcookie("idiomaSolicitado", "", time() - 1, "/");
echo "Cookie eliminada<br>";
echo "<a href=\"6_usar.php\">Regresar</a>";


?>