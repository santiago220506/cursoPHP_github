<?php

// STRINGS;
echo "Hola mundo";
echo "<p>Hola mundo, estoy aprendiendo el peor lenguaje que existe: <br> <h3>PHP =)</h3></p>";

//VARIBLES
$nombre = 'Santiago';
$apellido = 'Barrera';

echo "Hola ".$nombre." ".$apellido;

// NUMEROS
$n1 = 3;
$n2 = 2;
$suma = $n1 + $n2;
echo "<br>La variable \$suma tiene un valor de $suma";

// CONDICIONALES
$numero = 5;
if($numero > 10){
    echo "\<br>$numero es mayor a 10";
} else{
    echo "\<br>$numero no es mayor a 10";
}

// SWITCH

$numero1 = -10;
switch($numero1){
    case $numero1 == 0: echo "<br>$numero1 es igual a 0";break;
    case $numero1 < 0: echo "<br>$numero1 es menor a 0";break;
    case $numero1 > 0: echo "<br>$numero1 es mayor a 0"; break;
}

// CICLO FOR

for($i = 0; $i <= 10; $i++){
    if($i == 0){
        echo "<br>";
    }
    echo "<br>$i";
}

// CICLO WHILE


$it = 0;

while($it <= 10){
    if($it == 0){
        echo "<br>";
    }
    echo "<br>".$it++;
}

// CICLO DO WHILE;

$ite = 0;

do{
    if($ite == 0){
        echo "<br>";
    }
    echo"<br>".$ite++;
}while($ite <= 10);

?>