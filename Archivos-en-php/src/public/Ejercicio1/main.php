<?php 

    /**
     * Funcion que lee el fichero del $path recibido y guarda la informacion en un array.
     * $path del fichero que se va a leer
     */
    function leerFichero(string $path){
        $fichero = fopen($path, "r");
        $array = [];
        for ($i=0; $i < count(file($path)) ; $i++) { 
            array_push($array, explode(",", fgets($fichero)));
        }
        fclose($fichero);
        return operar($array);
    }

    /**
     * Funcion que recibe un array con dos numeros y una operacion para calcular el resultado.
     * $array con la informacion a operar
     */
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

    /**
     * Funcion que recibe un array y mediante un foreach va introduciendo 
     * las distintas filas en el fichero del $path recibido.
     * $array que escribir en el fichero, $path del fichero a escribir
     */
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

    leerFichero("ops.csv");

?>