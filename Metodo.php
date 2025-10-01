<?php
class Calculadora {
    public function sumar($a, $b) {
        return $a + $b;
    }
}

$c = new Calculadora();
echo $c->sumar(3, 5); // 8
