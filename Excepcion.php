<?php
try {
    $x = 5 / 0;
} catch (DivisionByZeroError $e) {
    echo "Error: división entre cero\n";
}
