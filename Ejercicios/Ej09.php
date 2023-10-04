<?php
    function recorrerArray(){
        $array = [1, 2, 'Antonio', 200, 'Pepe'];
        $newArray = array_reverse($array);

        for($i = 0; $i < count($newArray); $i++){
            echo $newArray[$i] . "<br>";
        }
    }

    recorrerArray();
?>