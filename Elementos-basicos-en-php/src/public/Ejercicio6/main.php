<?php

function calcular() {
    $resultado = 0;

    for ($i = 1; $i <= 50; $i++) {
        $resultado += $i;
    }

    return $resultado;
}

echo calcular();

?>