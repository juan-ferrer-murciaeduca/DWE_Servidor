<?php

/*
Un número defectivo o deficiente es un número natural que es mayor que la suma de sus divisores propios exceptuándose a sí mismo.

*/

function esDivisor($numero1,$numero2) {
    return ($numero1 % $numero2 == 0);
}

function defectivo($numero) {

    $contador=1;
    $suma=0;
    while ($contador<$numero) {
            if (esDivisor($numero,$contador)) {
            $suma=$suma+$contador;
            }
            $contador++;
        }
    return ($numero>$suma);
}