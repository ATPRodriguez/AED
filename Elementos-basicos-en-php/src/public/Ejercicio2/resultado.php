<?php

$edad = $_POST["edad"];


function calcular($edad) {
    $resultado = "Eres menor de edad";
    if ($edad >= 18) {
        $resultado = "Eres mayor de edad";
    }

    if ($edad < 0) {
        $resultado = "No puedes tener una edad negativa";
    }

    return $resultado;
}

echo "<p>" . calcular($edad) . "</p>"; 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>