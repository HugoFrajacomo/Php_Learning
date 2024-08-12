<?php
    /*
    Operador and: &&   -> Dois lados precisam ser verdadeiros
    Operaor or: ||   -> Um dos lados precisa ser verdadeiro
    Operador not: !  -> Inverte o valor para ser verdadeiro
    */

    $a = 10;
    $b = 20;
    $c = 30;

    if ($a < $b && $b < $c) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    // Neste exemplo a (10) é menor que b (20) e b (20) é menor que c (30), então o resultado é verdadeiro

    echo "<br>";

    if ($a < $b || $b == $c) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    // Neste exemplo a (10) é menor que b (20) resultando em verdadeiro e b (20) não é igual a c (30) resultando em falso, como um dos lados é verdadeiro então resulta em verdadeiro

    echo "<br>";

    if (!($a < $b)) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    // Neste exemplo a (10) é menor que b (20) resultando em verdadeiro, mas o operador not inverte o valor para falso

    echo "<br>";

    if (!($a > $b)) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    // Neste exemplo a (10) não é maior que b (20) resultando em falso, mas o operador not inverte o valor para verdadeiro

    echo "<br>";

    if (!($a < $b && $b < $c)) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    // Neste exemplo a (10) é menor que b (20) e b (20) é menor que c (30), então o resultado é verdadeiro, mas o operador not inverte o valor para falso