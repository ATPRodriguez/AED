<?php

function mostrar() {
    for ($i = 1; $i <=50; $i++) {
            if (esPrimo($i)) {
                echo "$i ";
            }
    }
}

function esPrimo($numero) {
    for ($i = 3; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        } 
    }

    return true;
}

mostrar();

?>