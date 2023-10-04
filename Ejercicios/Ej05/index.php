<?php
    function dados(){
        $caras = ['<img src="./img/1.PNG"/>', '<img src="./img/2.PNG"/>', '<img src="./img/3.PNG"/>', '<img src="./img/4.PNG"/>', '<img src="./img/5.PNG"/>', '<img src="./img/6.PNG"/>'];

        $dado1 = array_rand($caras);
        echo $caras[$dado1];
    }

    dados();
?>