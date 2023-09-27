<?php
if (!isset($_POST['numero'])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Introduce numero</label>
        <input type="number" name="numero" id="numero" required>
        <br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>



<?php
}
else {
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
}
?>