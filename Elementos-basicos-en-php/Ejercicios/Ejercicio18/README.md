<div align="center">

# Ejercicio 18 - Palindromo 

<div align="justify">

## Comprueba si una palabra almacenada en una variable es palindroma.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio18)
```php
//Funcion principal
function esPalindromo($palabra) {
  for ($i = 0; $i < strlen($palabra); $i++) {
    if ($palabra[$i] != $palabra[strlen($palabra)-1-$i]) {
      echo "No es palindromo";
      return;
    }
  }

  echo "Es un palindromo";
}
```

</div>

</div>