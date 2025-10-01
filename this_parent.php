<?php
class Padre {
    public function mostrar() {
        echo "Método en Padre\n";
    }
}

class Hijo extends Padre {
    public function mostrar() {
        echo "Método en Hijo\n";
    }

    public function ejemplo() {
        $this->mostrar();   // Llama al método de esta clase
        parent::mostrar();  // Llama al método de la clase padre
    }
}

$h = new Hijo();
$h->ejemplo();
// Salida:
// Método en Hijo
// Método en Padre
