<?php

$numero = $_POST["numero"];


function calcularPerfecto($numero) {
  if ($numero < 0) {
    echo "Los numeros negativos no pueden ser perfectos";
    return;
  }

  $sumaDivisores = 0;
  
  for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
      $sumaDivisores+=$i;
    }
  }

  if ($numero == $sumaDivisores) {
    echo "$numero es un numero perfecto";
    return;
  }

  echo "$numero no es un numero perfecto";
}

calcularPerfecto($numero);

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>