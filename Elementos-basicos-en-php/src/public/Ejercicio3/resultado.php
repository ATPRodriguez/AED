<?php

$numero = $_POST["numero"];


function calcular($numero) {
    if ($numero > 0) {
        return "$numero es positivo";
    }

    if ($numero < 0) {
        return "$numero es negativo";
    }

    return "El numero es 0";
}

echo "<p>" . calcular($numero) . "</p>"; 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>