<div align="center">

# Ejercicio 1 - Numero capicua

<div align="justify">

## Implementa una funcion esCapicua(int $n): bool que determine si un numero entero positivo es capicua.


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio1)
```php
//Funcion principal
function esCapicua($numero) {
    if ($numero < 0) {
        echo "El numero ingresado debe ser positivo";
        return;
    }

    $numeroInvertido = strrev((string) $numero);

    if ($numeroInvertido == (string) $numero) {
        echo "El numero $numero es capicua";
        return;
    }

    echo "El numero $numero no es capicua";
}
```

</div>

</div>