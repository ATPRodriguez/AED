<div align="center">

# Ejercicio 13 - Multiplos de un numero 

<div align="justify">

## Pide un numero n y muestra sus multiplos hasta 100.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio13)
```php
//Funcion principal
function calcular($numero) {
  for ($i = $numero; $i <= 100; $i++) {
    if ($i % $numero == 0) {
      echo "$i ";
    }
  }
}
```

</div>

</div>