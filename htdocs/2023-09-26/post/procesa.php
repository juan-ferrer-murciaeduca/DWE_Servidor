<?php
$numero = $_POST['numero'];


/*
Numero triangular
*/

$contador = 1;
$suma = 0;

while ($suma < $numero) {
    $suma = $suma + $contador;
    $contador = $contador + 1;
}

if ($suma == $numero) {
    echo "El numero $numero es triangular";
} else {
    echo "El numero $numero no es triangular";
    echo "<br>";
    echo "El numero triangular mayor es $suma";
    echo "<br>";
    echo "El numero triangular menor es " . ($suma - $contador + 1);
}
