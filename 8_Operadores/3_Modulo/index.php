<?php
    //Verificar se o número é par ou ímpar
    $numero = 5;
    $resto = $numero % 2;
    if($resto == 0){
        echo "O número é par";
    } else {
        echo "O número é ímpar";
        echo "<br>";
        echo "O resto da divisão é: " . $resto;
    }