<?php
    // Ejercicio 11
    function numeroLider($array){
        $arrayFinal = [];
    
        foreach($array as $key => $value){
            // Recorre el array y coge los valores a la derecha
            $arrayDerecha = array_slice($array, $key + 1);

            // Suma los valores
            $valorTotal = array_sum($arrayDerecha);

            // Añade al array los números lideres
            if($value > $valorTotal){
                array_push($arrayFinal, $value);
            }
        }

        return $arrayFinal;
    }

    // Recorre cada resultado
    function mostrarLider($ejemplo){
        $resultado = "";

        foreach ($ejemplo as $value) {
            $resultado .=  $value . " ";
        }
        
        return $resultado;
    }

    // Almacena e imprime los diferentes ejemplos
    $ejemplo1 = numeroLider([1,2,3,4,0]);
    $ejemplo2 = numeroLider([16,17,4,3,5,2]);
    $ejemplo3 = numeroLider([5,2,-1]);
    $ejemplo4 = numeroLider([0,-1,-29,3,2]);

    echo "• Leaders [1,2,3,4,0] ==> " . mostrarLider($ejemplo1) . "<br>";
    echo "• Leaders [16,17,4,3,5,2] ==> " . mostrarLider($ejemplo2) . "<br>";
    echo "• Leaders [5,2,-1] ==> " . mostrarLider($ejemplo3) . "<br>";
    echo "• Leaders [0,-1,-29,3,2] ==> " . mostrarLider($ejemplo4) . "<br>";
?>