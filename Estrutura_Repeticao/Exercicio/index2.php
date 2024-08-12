<?php
    //Criar um arrey através de um loop

    $array = [];

    for ($i = 1; $i <= 20; $i++) {
        $array[] = $i;
    }

    foreach ($array as $value) {
        echo "$value <br>";
    }

    print_r($array);