<div align="center">

# Ejercicio 20 - Triangulo de asteriscos 

<div align="justify">

## Muestra en pantalla un triángulo de altura n usando *.
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio20)
```php
//Funcion principal
function calcular($numero) {
  for ($i = 1; $i <= $numero; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "</br>";
  }
}
```

</div>

</div>