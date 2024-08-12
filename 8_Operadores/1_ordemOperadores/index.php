<?php

    // Ordem de operadores -> segue a ordem matemática
    echo 3 + 2 * 5; // 13
    echo "<br>";
    echo (3 + 2) * 5; // 25

    $a = 5;
    $b = 2;
    $c = 10;

    echo "<br>";
    echo $a + $b * $c; // 25
    echo "<br>";
    echo ($a + $b) * $c; // 70

    $d = $a + $b; //7
    echo "<br>";
    echo $d;