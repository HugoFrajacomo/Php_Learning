# Php_Learning

Professor Matheus Battisti <br>
Git do Curso: https://github.com/matheusbattisti/curso_php

## Instalando pacote XAMPP contendo:

- Apache
- MySQL
- Pearl
- PHP

<b>Link: https://www.apachefriends.org/pt_br/download.html </b>

obs: todos os projetos devem ser colocados dentro da pasta htdocs que estão no local da instalação do XAMPP

## Sintaxe

- Bloco PHP <br>
![code](https://github.com/user-attachments/assets/56c7f6f2-0811-41f8-96e0-d1ebb7a801d7)

- Case Sensitivity
No php somente há diferente entre palavras com letra maiúsculas e minusculas quando tratamos de variáveis. Ex: <br>
![code](https://github.com/user-attachments/assets/8690d9ad-7ca2-4407-87d8-0ac7ba11acbc)

- Comentários em PHP
Para comentar um linha utilizar // ou #
Multiplas linhas /* comentário */

- Palavras reservadas
echo, insteadof, else, interface, namespasce, pow, _DIR_, _FILE_, endif, print, private, protected, and, require, public, as, break, case, for, finally, switch, throw, entre outras...

## Dependências

phpinfo() - Mostra todas as dependências do projeto e seus respectivas versões e configurações.

## Tipo de dados - Pasta 3

PHP é uma linguagem de programação fracamente tipada. Isso significa que o PHP permite operações entre variáveis de diferentes tipos sem necessidade de conversões explícitas. 

<b>integers:</b> Números inteiros posisivos e negativos <br><br>
![code](https://github.com/user-attachments/assets/4b63ef0d-06c4-4e6c-bd04-b93bb53d817a)
<b>string:</b> Sequencia de caracteres<br><br>
<b>float:</b> Número com casas decimais contendo "." (ponto) como separador também podem ser negativos.<br><br>
<b>Boolean:</b> True / False (0, 0.0, "0", [], NULL -> Também são consideredos como falso)<br><br>
<b>Arrey:</b> [ ] dados devem ser separados por virculas. (Não necessáriamente precisam ter o mesmo tipo de dados<br><br>
<b>Arrey associativo:</b> permite colocar definir uma chava velor para seu arrey. Desta forma podemos alterar o indice ao qual um valor é atribuido. Ex: <br><br>
![code](https://github.com/user-attachments/assets/3cb1eb1e-ea9c-4f3d-8489-008fb5ad0062)
<b>NULL:</b> Também é possivel atribuir uma variável nula para inicializar ela sem quaquer valor.

obs1: como verificar qual o tipo de uma variável:
![code](https://github.com/user-attachments/assets/fbe30f86-4295-432a-8d86-130d7884d58f)

obs2: Aspas duplas interpretam variáveis e simples não interpretam na hora de impromir os valores na tela
![code](https://github.com/user-attachments/assets/18c4979c-3f47-44d9-849e-35e1a9e53f66)

obs3: Quando imprimir "echo true" o valor apresentado será 1. Para apresentar verdadeiro devemos fazer o seguinte: 
![code](https://github.com/user-attachments/assets/369cc225-134a-487e-bed7-794ce133cc9c)

obs4: Para <b>Imprimir um Arrey </b><br>
Utilizamos a função "print_r" ou $arr_n[index] para imprimir o arrey de um index específico
![code](https://github.com/user-attachments/assets/e6b7bd0c-b2b1-4dc7-bb83-8433eaa35dde)

Caso seja falso nada será impresso. 

## Variáveis - Pasta 7

- Declaração de Variável (Declara-se utilizando o "$") 
- Declaração de variável por meio de outra variável (Declara-se utilizando "$$")
  ![code](https://github.com/user-attachments/assets/5da32661-1647-4cd6-b5ac-52e16dd82832)
- Variável por referência (Declara-se utilizando =&). Caso mude a variável de referência a referenciada muda o valor. O mesmo vale da forma contrária.

## Escopo - Pasta 7

- Local: variável declarada em uma função;
- Global: variável declaradas fora de funções (utiliza-se palavre reservada "global" para acessar variável dentro de funções);
- Static: variável declarada dentro da função, porém seu valor permanace entre chamadas da função
- Parâmetros de função: variáveis passadas para uma função, podendo ser utilizadas ao longa da mesma.

## Expressoes e Operadores

## Objetos

<b>Arquivo: 6_Objetos</b>











