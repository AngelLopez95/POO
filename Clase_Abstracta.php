<?php
abstract class Figura {
    abstract public function area();
}

class Circulo extends Figura {
    private $radio = 5;

    public function area() {
        return pi() * $this->radio * $this->radio;
    }
}

$f = new Circulo();
echo $f->area(); // 78.5

