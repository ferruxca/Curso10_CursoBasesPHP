<?php

// POO en PHP
echo "<h1>POO en PHP</h1>";
echo "<h2>Clases y Objetos</h2>";

class Persona { // Clase
    public $nombre; // Atributo
    public $edad; // Atributo
    public $genero; // Atributo

    public function __construct($nombre, $edad, $genero) { // Constructor
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
    }

    public function __destruct() { // Destructor
        // Al finalizar el script, al ejecutrar unset() o al salir del alcance de $objeto, se ejecutará el destructor
        echo "Se destruyó el objeto de la persona {$this->nombre}.<br>";
    }

    public function mostrarDatos() { // Método
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Género: " . $this->genero . "<br>";
    }
}

$persona1 = new Persona("Nancy", 10, "Femenino"); // Instanciación
$persona1->mostrarDatos(); // Invocación

echo "<br>";
$persona2 = new Persona("Santiago", 11, "Masculino"); // Instanciación
$persona2->mostrarDatos(); // Invocación

echo "<br>";
echo "La <strong>persona1</strong> se llama ".$persona1->nombre." tiene ".$persona1->edad." años y es ".$persona1->genero."<br>";
echo "La <strong>persona2</strong> se llama ".$persona2->nombre." tiene ".$persona2->edad." años y es ".$persona2->genero."<br>";
unset($persona2); // Liberación segunda instancia.
echo "<br>";
echo "Modificando el nombre de la <strong>persona1</strong>.<br>";
$persona1->nombre = "Jessica";
echo "La <strong>persona1</strong> se llama ".$persona1->nombre." tiene ".$persona1->edad." años y es ".$persona1->genero."<br>";
echo "<br>";

$persona1->mostrarDatos(); // Invocación