<div align="center">

# Ejercicio 1 - Operaciones con numeros naturales en PHP

<div align="justify">

## Dado un fichero ops.csv con columnas: `z1,z2,op` donde: `op ∈ {suma, resta, producto, division}`. Se debe calcular `z1 (op) z2` y generar como salida un fichero resultado.csv.



### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Archivos-en-php/src/public/Ejercicio1)
```php
//Funciones
function operar(Array $array){
    $array[0] = ["z1","z2","op","resultado"];
    for ($i=1; $i < count($array); $i++) {
        $arrayAuxiliar = $array[$i];
        $arrayAuxiliar[2] = trim($arrayAuxiliar[2]);

        try {
            $resultado = match($arrayAuxiliar[2]) {
                "suma" => $arrayAuxiliar[0] + $arrayAuxiliar[1],
                "resta" => $arrayAuxiliar[0] - $arrayAuxiliar[1],
                "producto" => $arrayAuxiliar[0] * $arrayAuxiliar[1],
                "division" => $arrayAuxiliar[0] / $arrayAuxiliar[1]
            };
        } catch(DivisionByZeroError $e) {
            $resultado = "ERROR";
        }
        $arrayAuxiliar[] = $resultado;
        $array[$i] = $arrayAuxiliar;
    }
    return escribir($array, "resultado.csv");
}

function escribir(Array $array, string $path){
        $fichero = fopen($path, "w");
        foreach ($array as $valor) {
            for ($i=0; $i < count($valor); $i++) { 
                fwrite($fichero, (string) $valor[$i]);
                if ($i < 3) {
                    fwrite($fichero, ",");
                }
            }
            fwrite($fichero, "\n");
        }
        fclose($fichero);
    }
```

</div>

</div>