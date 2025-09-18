<?php

$numero = $_POST["numero"];


function calcular($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$numero * $i = " . ($numero*$i) . "</p>";
    }
}

echo "<p>" . calcular($numero) . "</p>"; 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>