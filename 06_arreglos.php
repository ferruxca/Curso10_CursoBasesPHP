<?php

// Arreglos en PHP
echo "<h2>Arreglos en PHP</h2>";

$frutas = array("Manzana", "Plátano", "Mango");
echo "[".$frutas[0].", ".$frutas[1].", ".$frutas[2]."]<br>";
echo "frutas[0] = ".$frutas[0]."<br>";

// Arreglos asociativos en PHP
echo "<h2>Arreglos asociativos en PHP</h2>";
$persona = array("nombre" => "Nancy", "edad" => 10, "ciudad" => "San Juan del Río");
echo "nombre = ".$persona["nombre"]."<br>";
echo "edad = ".$persona["edad"]."<br>";
echo "ciudad = ".$persona["ciudad"]."<br>";

// Arreglos multidimensionales en PHP
echo "<h2>Arreglos multidimensionales en PHP</h2>";
$alumnos = array(
    array("nombre" => "Nancy", "edad" => 10, "ciudad" => "San Juan del Río"),
    array("nombre" => "Santiago", "edad" => 11, "ciudad" => "Ezequiel Montes"),
    array("nombre" => "Fernando", "edad" => 8, "ciudad" => "Querétaro")
);
echo "nombre = ".$alumnos[0]["nombre"]."<br>";
echo "edad = ".$alumnos[0]["edad"]."<br>";
echo "ciudad = ".$alumnos[0]["ciudad"]."<br>";

// Arreglos con foreach en PHP
echo "<h2>Arreglos con foreach en PHP</h2>";
$frutas = array("Manzana", "Plátano", "Mango");
echo "frutas => ";
foreach ($frutas as $fruta) {
    echo $fruta." | ";
}
echo "<br>";

echo "<h3>POP y PUSH en arreglos en PHP</h3>";

// POP y PUSH en arreglos en PHP
array_push($frutas, "Uva"); // Agrega un elemento al final del arreglo

echo "frutas => ";
foreach ($frutas as $fruta) {
    echo $fruta." | ";
}

echo "<br>";

array_pop($frutas); // Elimina el último elemento del arreglo

echo "frutas => ";

foreach ($frutas as $fruta) {
    echo $fruta." | ";
}
echo "<br>";

//Cantidad de elementos de un arreglo
echo "<h3>Cantidad de elementos de un arreglo</h3>";
echo "Cantidad de elementos: ".count($frutas)."<br>";