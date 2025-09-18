<div align="center">

# Ejercicio 2 - Edad permitida

<div align="justify">

## Pide la edad de una persona y muestra: "Eres menor de edad" si es < 18. "Eres mayor de edad" si es ≥ 18.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio2)
```php
//Funcion principal
function calcular($edad) {
    $resultado = "Eres menor de edad";
    if ($edad >= 18) {
        $resultado = "Eres mayor de edad";
    }

    if ($edad < 0) {
        $resultado = "No puedes tener una edad negativa";
    }

    return $resultado;
}
```

</div>

</div>