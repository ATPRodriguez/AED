<?php

$numero = $_POST["numero"];
$numeroGenerado = $_POST["numeroGenerado"];


function calcular($numero, $numeroGenerado) {

    if ($numero < $numeroGenerado) {
      echo "$numero es menor que x";
      return;
    }
    
    if ($numero > $numeroGenerado) {
      echo "$numero es mayor que x";
      return;
    }
  echo "Has ganado! El numero secreto era $numeroGenerado";
}

calcular($numero, $numeroGenerado);

echo "<form method=\"post\" action=\"resultado.php\">
  <p>Ingrese un numero: <input type=\"number\" name=\"numero\" required></p>
  <input type=\"hidden\" name=\"numeroGenerado\" value=\"$numeroGenerado\" required>
  <input type=\"submit\">
</form>";


echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>";

?>