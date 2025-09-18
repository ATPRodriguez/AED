<?php

$numero = $_POST["numero"];


function invertir($numero) {
  $resultado = (string) $numero;
  
  if ($numero < 0) {
    $resultado =  abs($numero) . "-";
  }
  
  return strrev($resultado);
}

echo invertir($numero);

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>