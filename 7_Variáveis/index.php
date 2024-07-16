<?php
    //Varoável de Variável
    $x = "Nome"; //Variável comum
    $$x = "Maria"; //Variável de x (nome) com o valor "Maria"

    echo $x;
    echo "<br>";
    echo $Nome;
    echo "<hr>";

    /* --------------------------------------------- */
    //Variável por referência

    $a = 3;
    $b = &$a; //Variável b é uma referência a variável a

    echo $a;
    echo "<br>";
    echo $b;

    $a = 5; //Alterando apenas uma variável ambâs serão alteradas.
    echo "<br>";
    echo $b; 
    echo "<br>";
    echo $a;
?>