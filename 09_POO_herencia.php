<?php

// Herencia
echo "<h2>Herencia</h2>";
class Vehiculo {
    public $marca;
    public $modelo;
    public $color;

    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function mostrarDatos() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

class Coche extends Vehiculo {
    public $puertas;

    public function __construct($marca, $modelo, $color, $puertas) {
        parent::__construct($marca, $modelo, $color);
        $this->puertas = $puertas;
    }

    public function mostrarDatos() {
        parent::mostrarDatos(); // Polimorfismo
        echo "Puertas: " . $this->puertas . "<br>";
    }
}

/* 
$vehiculo1 = new Vehiculo("Vehiculo Genérico", "Modelo Genérico", "Color Genérico");
$vehiculo1->mostrarDatos(); 

echo "<br>";
*/

$coche1 = new Coche("Automovil", "Kia", "Blanco", 5);
$coche1->mostrarDatos();

