<?php
    // Utiliza-se o "." para concatenar strings
    $nome = "João";
    $sobrenome = "da Silva";
    echo $nome . " " . $sobrenome;

    $marca = "Fiat"; // string
    $motor = 1.0; // float

    echo "<br>";
    echo "Marca: " . $marca . ". Motor: " . $motor; //string
    $carro = $marca . " " . $motor; // string
    echo "<br>";
    echo gettype($carro); // string