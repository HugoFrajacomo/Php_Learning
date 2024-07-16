<?php

    $arr = [
        "nome" => "João",
        "idade" => 25,
        "altura" => 1.75,
        "ativo" => true
    ];

    echo "Nome: " . $arr["nome"] . "<br>";
    echo "Idade: " . $arr["idade"] . "<br>";
    echo "Altura: " . $arr["altura"] . "<br>";
    if($arr["ativo"]){
        echo "Ativo: True <br>";
    } else {
        echo "Ativo: False <br>";
    }
    print_r($arr);

    //Desta forma o index que remete ao nome João é o nome, e não o 0.
?>