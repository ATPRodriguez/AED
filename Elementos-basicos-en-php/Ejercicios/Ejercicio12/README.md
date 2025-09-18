<div align="center">

# Ejercicio 12 - Fibonacci

<div align="justify">

## Genera los primeros 20 términos de la secuencia de Fibonacci.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio12)
```php
//Funcion principal
function mostrar() {
    $actual = 0;
    $siguiente = 1;
    for ($i = 2; $i <=20; $i++) {
        echo "$actual ";
        $auxiliar = $actual + $siguiente;
        $actual = $siguiente;
        $siguiente = $auxiliar;
    }
}
```

</div>

</div>