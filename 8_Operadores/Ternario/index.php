<?php
    // Operador ternário
    $a = 10;
    $b = 20;
    $c = 0;

    $c = ($a > $b) ? "A é Maior que b" : "A é Menor que b";
    $d = ($b > $a) ? "B é Maior que a" : "B é Menor que a";

    echo $c;
    echo "<br>";
    echo $d;