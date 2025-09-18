<?php

function sumaParesImpares() {
    $resultadoPares = 0;
    $resultadoImpares = 0;
    for ($i = 1; $i <=100; $i++) {
        if ($i % 2 == 0) {
            $resultadoPares += $i;
        } else {
            $resultadoImpares += $i;
        }
    }

    echo "<p>Resultado suma pares: $resultadoPares</p>";
    echo "<p>Resultado suma impares: $resultadoImpares</p>";
}

sumaParesImpares();

?>