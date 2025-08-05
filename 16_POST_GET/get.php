<?php

echo "<pre>";
var_dump($_GET);
echo "</pre>";


echo "<br>";
if(isset($_GET['nombre']) && isset($_GET['apellido'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    echo "Hola " . $nombre . " " . $apellido;
} else {
    echo "No se ha proporcionado un nombre y apellido juntos.";
}
