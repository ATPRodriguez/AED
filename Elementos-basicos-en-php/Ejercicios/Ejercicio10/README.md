<div align="center">

# Ejercicio 10 - Factorial.

<div align="justify">

## Calcula el factorial de un numero introducido (ejemplo: 5! = 120).
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio10)
```php
//Funcion principal
function calcular($numero) {
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}
```

</div>

</div> 