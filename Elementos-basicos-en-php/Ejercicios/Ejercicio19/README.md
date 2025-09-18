<div align="center">

# Ejercicio 19 - Maximo comun divisor (MCD) 

<div align="justify">

## Escribe un algoritmo que calcule el MCD de dos números.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio19)
```php
//Funcion principal
function mcd($numero, $numero2) {
  return gmp_gcd($numero, $numero2);  
}
```

> :warning: Para el uso de la funcion `gmp_gcd()` es necesario poner `extension=gmp` en el php.ini (Windows) o descargar el paquete `sudo apt-get install php-gmp` (Linux) 

</div>

</div>