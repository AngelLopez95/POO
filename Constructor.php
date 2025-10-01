<?php
class Persona {
    public $nombre;

    // Constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

$p = new Persona("Juan");
echo $p->nombre; // La salida para este caso seria Juan
