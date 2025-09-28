<div align="center">

# Ejercicio 2 - Estadisticas de palabras en PHP

<div align="justify">

## Dado un fichero `texto.txt`, contar cuantas palabras hay en total y cuantas veces aparece cada palabra. La salida se debe guardar en `estadisticas.csv` con el formato: `palabra,frecuencia`

### Reglas: 
### - Ignorar mayúsculas/minúsculas (ejemplo: PHP y php cuentan como la misma palabra).
### - Ignorar signos de puntuación.


### [Codigo](https://github.com/ATPRodriguez/AED/tree/main/Archivos-en-php/src/public/Ejercicio2)
```php
//Funciones
function leer(String $path){
    $fichero = fopen($path, "r");
    $texto = strtolower(file_get_contents($path));
    fclose($fichero);
    analizar($texto);
}

function analizar(String $texto){
    $texto = str_replace([",",".","\n"],"",$texto);
    $array = explode(" ", $texto);
    $resultado = [[],[]];
    foreach ($array as $palabra) {
        $posicion = array_search($palabra, $resultado[0]);
        if ($posicion === false) {
            $resultado[0][] = $palabra; 
            $resultado[1][] = 1;
        }else{
            $resultado[1][$posicion]+=1;
        }     
    }
    escribir ($resultado, "estadisticas.csv");
}

function escribir(array $array, string $path){
    $file = fopen($path, "w");
    print_r($array[0]);
    for ($i=0; $i < count($array[0]); $i++) { 
        fwrite($file, $array[0][$i] . "," . $array[1][$i] . "\n");
    }
    fclose($file);
}
```

### Salida
```
zeus,1
gobernaba,1
desde,1
el,3
olimpo,1
lanzando,1
rayos,1
y,2
truenos,1

atenea,1
diosa,1
de,1
la,1
sabiduría,1
protegía,1
a,1
los,3
héroes,1

hércules,1
realizaba,1
sus,1
doce,1
trabajos,1
mientras,1
poseidón,1
agitaba,1
mares,1
con,1
su,1
tridente,1

hades,1
reinaba,1
en,1
inframundo,1
afrodita,1
inspiraba,1
amor,1
entre,1
mortales,1
```

</div>

</div>