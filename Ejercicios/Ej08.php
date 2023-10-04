<?php
    function mostrarArray(){
        $num = [rand(20, 30)];

        foreach($num as $value){
            echo "Número al azar entre 20 y 30: $value";
        }
    }

    mostrarArray();
?>