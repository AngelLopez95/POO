<?php
class Animal {
    public function sonido() {
        echo "Hace un sonido\n";
    }
}

class Perro extends Animal {
    public function sonido() {
        echo "Guau!\n";
    }
}

$p = new Perro();
$p->sonido(); // Guau!
