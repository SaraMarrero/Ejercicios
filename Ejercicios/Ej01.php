<?php
    function tipoDatos(){
        $nombre = "Sara";
        $tarea = 'ejercicio 1';
        $curso = 2;

        define("ASIGNATURA", "Desarrollo web en entorno servidor");
        echo ASIGNATURA . "<br>";

        print "Me llamo $nombre y esto es el $tarea.<br>";

        var_dump($nombre, $tarea, $curso);
    }

    tipoDatos();
?>