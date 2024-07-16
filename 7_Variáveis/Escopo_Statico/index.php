<?php

    function teste(){
        $a = 0;
        $a++;

        echo $a;
        echo "<br>";
    }

    teste();
    teste();
    teste();

    echo "<hr>";

    function testeStatic(){
        static $a = 0; //escopo será mantido e o valor adicionará +1 a cada chamada da função
        $a++;

        echo $a;
        echo "<br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();

?>