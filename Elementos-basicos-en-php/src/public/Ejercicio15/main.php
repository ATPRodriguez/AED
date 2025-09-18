<?php

$numeroGenerado = rand(1,20);

echo "<form method=\"post\" action=\"resultado.php\">
  <p>Ingrese un numero: <input type=\"number\" name=\"numero\" required></p>
  <input type=\"hidden\" name=\"numeroGenerado\" value=\"$numeroGenerado\" required>
  <input type=\"submit\">
</form>"

?>