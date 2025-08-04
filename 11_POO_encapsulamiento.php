<?php

// Encapsulamiento
echo "<h2>Encapsulamiento</h2>";
class Vehiculo {
    private $marca;
    private $modelo;
    private $color;

    public function __construct() {
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getColor() {
        return $this->color;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function mostrarDatos() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

$vehiculo1 = new Vehiculo();
$vehiculo1->mostrarDatos();

echo "<br>";

$vehiculo1->setMarca("Kia");
$vehiculo1->setModelo("K4");
$vehiculo1->setColor("Blanco Perla");

$vehiculo1->mostrarDatos();

// Pruebas de uso
/* 
$vehiculo2 = new Vehiculo();
$vehiculo2->marca = "Ford";
$vehiculo2->modelo = "Mustang";
$vehiculo2->color = "Rojo";
$vehiculo2->mostrarDatos(); 
*/


?>