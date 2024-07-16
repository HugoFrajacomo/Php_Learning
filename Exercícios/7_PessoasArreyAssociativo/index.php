<?php

    $pessoa = [
        "nome" => "João",
        "idade" => 25,
        "altura" => 1.75,
    ];

    if($pessoa["idade"] >= 18){
        echo "Maior de idade";
    } else {
        echo "Menor de idade";
    }

?>