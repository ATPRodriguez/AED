<?php

$palabra = $_POST["palabra"];


function esPalindromo($palabra) {
  for ($i = 0; $i < strlen($palabra); $i++) {
    if ($palabra[$i] != $palabra[strlen($palabra)-1-$i]) {
      echo "No es palindromo";
      return;
    }
  }

  echo "Es un palindromo";
}

esPalindromo($palabra);

echo "<form method=\"post\" action=\"main.php\">
  <input type=\"submit\" value=\"Volver\">
</form>"

?>