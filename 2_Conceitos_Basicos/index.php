<?php
    // Não é Case sensitive
    echo "Teste <br>";
    Echo "Teste  2<br>";
    EcHo "Teste 3<br>";

    // É case Sensitive
    $nome = "Lucas";
    $Nome = "Fernando";

    //Instruções executadas em uma linha são finalizadas com ";"
    echo $nome . "<br>";
    echo $Nome . "<br>";
    echo $NoMe . "<br>"; //não existe aparesenta erro

    //Quando quero instruções em mais de uma linha, use "{}"
    if($nome == "Lucas"){
        echo "É o Lucas <br>";
        echo "Seja bem vindo Lucas <br>";
    }else{
        echo "Não é o Lucas <br>";
    }
?>

