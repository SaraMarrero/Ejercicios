<?php
    function mostrarArray(){
        $pares = [];

        // Almacena los números pares del 1 al 100
        for($i = 1; $i <= 100; $i++){
            if($i % 2 === 0){
                array_push($pares, $i);
            }
        }

        echo "<h2>Números pares del 1 al 100</h2>";

        // Muestra los datos de array
        foreach ($pares as $value) {
            echo $value . "<br>";
        }
    }

    mostrarArray();
?>