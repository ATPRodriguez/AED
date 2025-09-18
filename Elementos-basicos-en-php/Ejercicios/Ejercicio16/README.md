<div align="center">

# Ejercicio 16 - Numero Perfecto 

<div align="justify">

## Comprueba si un número es perfecto (la suma de sus divisores propios es igual al número).
   


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Elementos-basicos-en-php/src/public/Ejercicio16)
```php
//Funcion principal
function calcularPerfecto($numero) {
  if ($numero < 0) {
    echo "Los numeros negativos no pueden ser perfectos";
    return;
  }

  $sumaDivisores = 0;
  
  for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
      $sumaDivisores+=$i;
    }
  }

  if ($numero == $sumaDivisores) {
    echo "$numero es un numero perfecto";
    return;
  }

  echo "$numero no es un numero perfecto";
}

```

</div>

</div>