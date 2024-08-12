<?php
    // Forçar a conversão de um tipo de dado para outro
    $a = 10;
    $b = (float)$a;

    echo gettype($b);

    //desta forma o valor de $a é convertido para float

    echo "<br>";
    $pi = (float) "3.143234"; //Convertendo string para float/double

    echo gettype($pi);

    echo "<br>";
    $c = (int) "Caminhão"; //Convertendo string para inteiro resultando em "0"
    echo $c;

    echo "<br>";
    $d = (int) 10.61; //Convertendo float para inteiro resultando em "10"
    echo $d;

    echo "<br>";
    $e = (int) [7, 52, 43]; //Convertendo array para inteiro resultando em "1"
    echo $e;