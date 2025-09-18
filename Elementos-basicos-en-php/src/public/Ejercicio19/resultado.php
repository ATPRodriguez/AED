<?php

$numero = $_POST["numero"];
$numero2 = $_POST["numero2"];


function mcd($numero, $numero2) {
  return gmp_gcd($numero, $numero2);  
}

echo "El maximo comun divisor de $numero y $numero2 es " . mcd($numero, $numero2); 

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>