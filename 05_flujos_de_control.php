<?php

echo "<h1>Flujos de control en PHP</h1>";

// If en PHP
echo "<h3>IF:</h3>";
$numero = 5;
if ($numero > 0) {
    echo "El número es positivo.";
} elseif ($numero == 0) {
    echo "El número es cero.";
} else {
    echo "El número es negativo.";
}

// For en PHP
echo "<h3>FOR:</h3>";
for ($i = 0; $i < 10; $i++) {
    echo $i." | ";
}

// While en PHP
echo "<h3>WHILE:</h3>";
$numero = 20;
while ($numero < 30) {
    echo $numero." | ";
    $numero++;
}

// Do While en PHP
echo "<h3>DO WHILE:</h3>";
$numero = 10;
do {
    echo $numero." | ";
    $numero--;
} while ($numero >= 0);

// Switch en PHP
echo "<h3>SWITCH:</h3>";
$dia = "Lunes";
switch ($dia) {
    case "Lunes":
        echo "Es Lunes.";
        break;
    case "Martes":
        echo "Es Martes.";
        break;
    default:
        echo "Es otro día.";
}

