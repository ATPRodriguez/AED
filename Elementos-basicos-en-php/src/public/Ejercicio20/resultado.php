<?php

$numero = $_POST["numero"];


function calcular($numero) {
  for ($i = 1; $i <= $numero; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "</br>";
  }
}

calcular($numero);

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>