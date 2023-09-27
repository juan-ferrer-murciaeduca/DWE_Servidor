<?php
$numero=$_GET['numero'];


/*
Numero triangular
*/

$contador=1;
$suma=0;

while ($suma<$numero) {
    $suma=$suma+$contador;
    $contador=$contador+1;
}

if ($suma==$numero) {
    echo "El numero $numero es triangular";
} else {
    echo "El numero $numero no es triangular";
}


?>