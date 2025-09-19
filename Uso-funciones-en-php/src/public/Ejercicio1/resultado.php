<?php

$numero = $_POST["numero"];


function esCapicua($numero) {
    if ($numero < 0) {
        echo "El numero ingresado debe ser positivo";
        return;
    }

    $numeroInvertido = strrev((string) $numero);

    if ($numeroInvertido == (string) $numero) {
        echo "El numero $numero es capicua";
        return;
    }

    echo "El numero $numero no es capicua";
}

echo esCapicua($numero); 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>