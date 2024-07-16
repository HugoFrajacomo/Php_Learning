<?php

    $nome = "Maria";
    $idade = 25;
    $idade2 = 25.5;

    if(is_int($idade)){
        echo "A variável idade é um número inteiro";
    }else{
        echo "A variável idade não é um número inteiro";
    }

    if(is_int($idade2)){
        echo "<br>A variável idade2 é um número inteiro";
    }else{
        echo "<br>A variável idade2 não é um número inteiro";
    }

    if(is_string($nome)){
        echo "<br>A variável nome é uma string";
    }else{
        echo "<br>A variável nome não é uma string";
    }

    /* Funções para verificar o tipo de dado
    is_int()
    is_float()
    is_string()
    is_bool()
    is_array()
    is_object()
    is_null()
    */
?>