<?php
interface Vehiculo {
    public function arrancar();
}

class Coche implements Vehiculo {
    public function arrancar() {
        echo "El coche arranca\n";
    }
}

$v = new Coche();
$v->arrancar(); // El coche arranca
