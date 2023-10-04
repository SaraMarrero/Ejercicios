<?php
    function valorAleatorio(){
        $valor = rand(1, 1000);
        return "Número al azar entre 1 y 1000: $valor";
    }

    echo valorAleatorio();
?>