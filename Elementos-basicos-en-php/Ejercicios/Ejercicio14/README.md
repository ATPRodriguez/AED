<div align="center">

# Ejercicio 14 - Suma de pares e impares 

<div align="justify">

## Calcula la suma de los números pares e impares entre 1 y 100 por separado.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio14)
```php
//Funcion principal
function sumaParesImpares() {
    $resultadoPares = 0;
    $resultadoImpares = 0;
    for ($i = 1; $i <=100; $i++) {
        if ($i % 2 == 0) {
            $resultadoPares += $i;
        } else {
            $resultadoImpares += $i;
        }
    }

    echo "<p>Resultado suma pares: $resultadoPares</p>";
    echo "<p>Resultado suma impares: $resultadoImpares</p>";
}
```

</div>

</div>