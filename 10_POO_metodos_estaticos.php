<?php

// Metodos Estaticos
echo "<h2>Metodos Estáticos</h2>";
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

    public static function mostrarDatosEstaticos() {
        echo "Se ejecuta método estático";
    }
}

$vehiculo1 = new Vehiculo("Automovil", "Kia", "Blanco");
$vehiculo1->mostrarDatos();
echo "<br>";
Vehiculo::mostrarDatosEstaticos();
