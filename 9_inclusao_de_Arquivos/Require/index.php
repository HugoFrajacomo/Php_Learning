<?php
    include 'test.php'; //quando não temos o arquivo ele continua a aplicação
    require 'test.php'; //quando não temos o arquivo ele para a aplicação
?>

<p>Arquivo do include</p>

<?php
    include 'Arquivos/funcao.php'; //podemos utilizar subpastas
    echo '<br>';
    echo 'Arquivo do include';
//obs: também podemos incluir includes encadeados
?>