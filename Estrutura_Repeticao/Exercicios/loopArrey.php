<?php
    $array = [1, [], 2.31, "chocolate", 2, "morango", 3, "baunilha", 4, "coco", 5, "uva"];
    $a = 0;
    $x = count($array);

    while ($a < $x) {
        if (is_string($array[$a])) {
            echo $array[$a];
            echo "<br>";
        } 
        $a++;
    }

    //Adicionando break

    echo "<br> Novo Loop <br>";

    //Desta forma ele irá parar no primeiro valor string que encontrar

    $b = 0;
    while ($b < $x) {
        if (is_string($array[$b])) {
            echo $array[$b];
            echo "<br>";
            echo "posição: $b";
            break;
        }
        $b++;
    }

    //Utilizando continue para pular a execução

    echo "<br> Novo Loop <br>";
    
    $z = 0;
    while ($z < 20) {
        if ($z == 2 || $z == 3) {
            echo "pulou <br>";
            $z++;
            continue;
        }
        echo "posição: $z <br>";
        $z++;
    }

    echo "<br>";

    //Loop Aninhado

    echo "<br> Novo Loop <br>";
    $c = 0;
    $d = 20;
    while ($c < 20) {
        echo "loop externo: $c <br>";
        while ($d > 0) {
            echo "loop interno: $d <br>";
            $d -= 2;
        }
        $c += 2;
    }