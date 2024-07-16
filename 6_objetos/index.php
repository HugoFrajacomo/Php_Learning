<?php

    class Pessoa {

        //Criação de Método
        function falar(){
            echo "Olá, pessoal!";
        }
    }

    //Instanciando a classe Pessoa
    $pessoa = new Pessoa();

    $pessoa->nome = "João"; //adicionando propriade ao objeto "pessoa"

    echo $pessoa->nome; //Imprimindo propriedade "nome" do objeto "pessoa"
    echo "<br>";

    $pessoa->falar(); //chamando o método falar

    //Para acessar uma propriedade ou um método devemos utilizar a seta ->
?>