<?php
    function duplicados($string){

        // Divide la cadena
        $cadenaDividida = explode(",", $string);

        // Elimina los repetidos
        $valoresUnicos = array_unique($cadenaDividida);

        // Une y muestra la cadena final
        $cadenaUnida = implode(",", $valoresUnicos);
        print_r($cadenaUnida);
    }

    duplicados("1,2,3,2,4,1,5");
?>