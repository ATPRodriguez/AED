<?php

$nota = $_POST["nota"];


function calcular($nota) {
    if ($nota < 0) {
        return "No puede tener una nota negativa";
    }

    if ($nota < 5) {
        return "Suspenso";
    }

    if ($nota <= 6) {
        return "Aprobado";
    }

    if ($nota <= 8) {
        return "Notable";
    }

    if ($nota <= 10) {
        return "Sobresaliente";
    }

    return "Su nota solo puede estar entre el 0 y el 10";
}

echo "<p>" . calcular($nota) . "</p>"; 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>