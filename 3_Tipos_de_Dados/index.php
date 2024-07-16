<?php

    echo "Numero interio: ";
    echo 5;
    echo "<br>";

    echo "Soma 5 + 3: ";
    echo 5 + 3;
    echo "<br>";

    $n = 5;
    $n2 = 3;
    echo "Sendo: n1 = " . $n . " e n2 = " . $n2 . " a soma é: ";
    echo $n + $n2;
    echo "<br>";


    // Variavel do tipo float
    $n3 = 5.5;
    if (is_float($n3)) {
        echo "Float de valor: " . $n3;
    } else {
        echo "Não é float";
    }

    echo "<br>";
    echo "Aspas duplas $n, $n2, $n3 <br>";
    echo 'Aspas simples $n, $n2, $n3';
    echo "<br>";
    
    echo true;
    echo "<br>";
    echo false;
    echo "<br>";

    echo true;
    if(true){
        echo "Verdadeiro";
    }

    echo "<br>";
    $arr_n = [10, 42, 53, 1, 99];
    print_r($arr_n);
    echo "<br> Imprimir número de um indice específico: <br>";
    echo $arr_n[0];
    echo "<br>";
    echo $arr_n[1];
    echo "<br>";
?>