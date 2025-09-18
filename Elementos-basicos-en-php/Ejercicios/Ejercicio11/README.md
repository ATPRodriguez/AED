<div align="center">

# Ejercicio 11 - Numeros primos.

<div align="justify">

## Escribe un algoritmo que muestre los números primos entre 1 y 50.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio11)
```php
//Funciones principales
function mostrar() {
    for ($i = 1; $i <=50; $i++) {
            if (esPrimo($i)) {
                echo "$i ";
            }
    }
}

function esPrimo($numero) {
    for ($i = 3; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        } 
    }

    return true;
}
```

</div>

</div>