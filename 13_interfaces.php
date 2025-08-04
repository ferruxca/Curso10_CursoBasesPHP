<?php

// Interfaces
interface Animal {
    public function hablar();
    public function comer();
}

interface Volar {
    public function volar();
}

class Perro implements Animal {

    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hablar() {
        echo "Guau! guau!.<br>";
    }

    public function comer() {
        echo $this->nombre." come.<br>";
    }
}

$perro = new Perro("Higor");
$perro->hablar();
$perro->comer();

echo "<br>";

?>
