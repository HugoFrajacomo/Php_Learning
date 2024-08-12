<?php
    /*
    Crie um Arrey com números de 1 a 20;
    Crie um loop e imprima apenas os números pares
    */

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    foreach ($array as $value) {
        if ($value % 2 == 0) {
            echo $value;
            echo "<br>";
        }
    }

    //outra solução

    echo "<br> Nova Solução <br>";

    $i = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            echo $array[$i];
            echo "<br>";
        }
    }