<?php

$numero = $_POST["numero"];


function calcular($numero) {
  for ($i = $numero; $i <= 100; $i++) {
    if ($i % $numero == 0) {
      echo "$i ";
    }
  }
}

calcular($numero);

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>