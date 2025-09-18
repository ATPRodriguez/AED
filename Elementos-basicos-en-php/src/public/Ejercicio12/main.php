<?php

function mostrar() {
    $actual = 0;
    $siguiente = 1;
    for ($i = 2; $i <=20; $i++) {
        echo "$actual ";
        $auxiliar = $actual + $siguiente;
        $actual = $siguiente;
        $siguiente = $auxiliar;
    }
}

mostrar();

?>