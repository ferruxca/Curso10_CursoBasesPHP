<?php

// Clases Abstractas

abstract class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function hablar();

    public function comer() {
        echo $this->nombre." come.<br>";
    }
}

class Perro extends Animal {
    public function hablar() {
        echo "Guau! guau!.<br>";
    }
}

class Gato extends Animal {
    public function hablar() {
        echo "Miau! miau!.<br>";
    }
}

$perro = new Perro("Higor");
$perro->hablar();
$perro->comer();

echo "<br>";

$gato = new Gato("Garfield");
$gato->hablar();
$gato->comer();

echo "<br>";

?>
