<div align="center">

# Ejercicio 17 - Invertir numero 

<div align="justify">

## Escribe un algoritmo que invierta los dígitos de un número (ejemplo: 123 → 321).
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio17)
```php
//Funcion principal
function invertir($numero) {
  $resultado = (string) $numero;
  
  if ($numero < 0) {
    $resultado =  abs($numero) . "-";
  }
  
  return strrev($resultado);
}
```

</div>

</div>