<div align="center">

# Ejercicio 1 - Mayor de dos numeros

<div align="justify">

## Pide dos numeros y muestra cual es mayor o si son iguales.


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio1)
```php
//Funcion principal
function calcular($numero1 = 0, $numero2 = 0) {
    $resultado = "Los numeros $numero1 y $numero2 son iguales";

    if ($numero1 > $numero2) {
        $resultado = "$numero1 es mayor que $numero2";
    }

    if ($numero1 < $numero2) {
        $resultado = "$numero1 es menor que $numero2";
    }

    return $resultado;
}
```

</div>

</div>