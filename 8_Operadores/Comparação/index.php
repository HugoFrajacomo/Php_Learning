<?php
    /*
    Igualdade: ==
    Idêntico: ===
    Diferente: !=
    Não idêntico: !==
    Menor que: <
    Maior que: >
    Menor ou igual: <e<=
    Maior ou igual: >e>=

    Retorna true ou false (0 ou 1)
    */

    $a = 10;
    $b = 20;

    if ($a == $b) {
        echo "A é igual a B";
    } else {
        echo "A é diferente de B";
    }
    echo "<br>";
    if ($a === $b) {
        echo "A é idêntico a B";
    } else {
        echo "A não é idêntico a B";
    }
    echo "<br>";
    if ($a < $b) {
        echo "A é menor que B";
    } else {
        echo "A não é menor que B";
    }
    echo "<br>";
    if ($a > $b) {
        echo "A é maior que B";
    } else {
        echo "A não é maior que B";
    }
    echo "<br>";
    if ($a <= $b) {
        echo "A é menor ou igual a B";
    } else {
        echo "A não é menor ou igual a B";
    }
    echo "<br>";
    if ($a >= $b) {
        echo "A é maior ou igual a B";
    } else {
        echo "A não é maior ou igual a B";
    }
    echo "<br>";

