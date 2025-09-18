<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];


function calcular($numero1 = 0, $numero2 = 0) {
    $resultado = "Los numeros $numero1 y $numero2 son iguales";

    if ($numero1 > $numero2) {
        $resultado = "$numero1 es mayor que $numero2";
    }

    if ($numero1 < $numero2) {
        $resultado = "$numero1 es menor que $numero2";
    }

    return $resultado;
}

echo "<p>" . calcular($numero1, $numero2) . "</p>"; 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>