<?php

// Funciones en PHP
echo "<h2>Funciones en PHP</h2>";

// Declaración de una función
function saludo() {
    echo "Hola, bienvenido al Curso de Bases de PHP.";
}

saludo();

// Parámetros en funciones en PHP
echo "<h2>Parámetros en funciones en PHP</h2>";
function saludoParametros($name) {
    return "Hola " . $name . ", bienvenido al Curso de Bases de PHP.";
}
echo saludoParametros("Nancy") . "<br>";

// Parámetros por defecto en funciones en PHP
echo "<h2>Parámetros por defecto en funciones en PHP</h2>";
function saldoParametrosPorDefecto($name=null) {
    if($name) {
        return "Hola " . $name . ", bienvenido al curso de Bases de PHP.";
    }
    return "Hola, bienvenido al curso de Bases de PHP.";
}
echo saldoParametrosPorDefecto("Nancy") . "<br>";
echo saldoParametrosPorDefecto() . "<br>";