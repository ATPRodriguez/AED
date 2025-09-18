<div align="center">

# Ejercicio 15 - Adivinar numero

<div align="justify">

## Genera un numero aleatorio entre 1 y 20. Pide al usuario que lo adivine y usa un bucle con condicionales para dar pistas: "Mayor" o "Menor".
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio15)
```php
//Funcion principal
function calcular($numero, $numeroGenerado) {

    if ($numero < $numeroGenerado) {
      echo "$numero es menor que x";
      return;
    }
    
    if ($numero > $numeroGenerado) {
      echo "$numero es mayor que x";
      return;
    }
  echo "Has ganado! El numero secreto era $numeroGenerado";
}

```

</div>

</div>