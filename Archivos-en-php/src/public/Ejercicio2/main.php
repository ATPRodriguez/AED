<?php 

/**
 * Funcion que lee un fichero y guarda en una variable todo el contenido de este en lowercase
 * $path del fichero a leer
 */
function leer(String $path){
    $fichero = fopen($path, "r");
    $texto = strtolower(file_get_contents($path));
    fclose($fichero);
    analizar($texto);
}

/**
 * Funcion que recibe un texto y elimina todos los signos de puntuacion y saltos de linea
 * pasa a un array todas las palabras del texto y guarda en el resultado un array de palabras y otro con las frecuencias de dichas palabras.
 * $texto a analizar
 */
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

/**
 * Funcion que escribe en el path solicitado el array recibido de la forma 'palabra,frecuencia'
 * $array que escribir, $path del fichero a escribir
 */
function escribir(array $array, string $path){
    $file = fopen($path, "w");
    print_r($array[0]);
    for ($i=0; $i < count($array[0]); $i++) { 
        fwrite($file, $array[0][$i] . "," . $array[1][$i] . "\n");
    }
    fclose($file);
}

leer("texto.txt");

?>