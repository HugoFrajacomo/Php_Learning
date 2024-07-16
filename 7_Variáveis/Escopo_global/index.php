<?php

    $teste = 10; //variáveis globais não podem ser acessadas dentro de funções

    echo $teste;
    echo "<br>";

    //podem ser acessadas dentro de if
    if(5 > 2){
        $teste = 5;
        echo $teste;
    }

    echo "<br>Global Após o if<br>";
    echo $teste;

    function funcao(){
        echo $teste; //não é possível acessar a variável global dentro de uma função (Erro)
    }

    funcao();

    function funcao2(){
        global $teste; //para acessar a variável global dentro de uma função, é necessário usar a palavra reservada global
        $teste *= 3;
        echo $teste;
    }

    funcao2();

    echo "<br>Global Após a função 2<br>";
    echo $teste; //a variável global foi alterada dentro da função

?>