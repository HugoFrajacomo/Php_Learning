<?php
    // AutoCast se da pela mudança de tipo de forma implícita
    $a = 5; //Número inteiro
    $b = 2; //Número inteiro
    $c = $a / $b; //Divisão de dois números inteiros resultado em float

    echo $c; // 2.5

    echo "<br>";

    if(is_float($c)){
        echo "É float";
    } else {
        echo "Não é float";
    }

    echo "<br>";

    echo 2 . 3; // resulta uma string com "valor" 23

    echo "<br>";

    $nome = "Hugo";
    $sobreNome = "Frajacomo";

    $nomeCompleto = $nome . " " . $sobreNome;
    echo $nomeCompleto;

    echo "<br>";
