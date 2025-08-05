<?php

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<br>";
if(isset($_POST['nombre']) && isset($_POST['apellido'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    echo "Hola " . $nombre . " " . $apellido;
} else {
    echo "No se ha proporcionado un nombre y apellido juntos.";
}
