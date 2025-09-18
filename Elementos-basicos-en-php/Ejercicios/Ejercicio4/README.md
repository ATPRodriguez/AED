<div align="center">

# Ejercicio 4 - Nota final.

<div align="justify">

## Pide la nota de un alumno y muestra: "Suspenso" (< 5), "Aprobado" (5–6), "Notable" (7–8), "Sobresaliente" (9–10).
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio4)
```php
//Funcion principal
function calcular($nota) {
    if ($nota < 0) {
        return "No puede tener una nota negativa";
    }

    if ($nota < 5) {
        return "Suspenso";
    }

    if ($nota <= 6) {
        return "Aprobado";
    }

    if ($nota <= 8) {
        return "Notable";
    }

    if ($nota <= 10) {
        return "Sobresaliente";
    }

    return "Su nota solo puede estar entre el 0 y el 10";
}
```

</div>

</div>