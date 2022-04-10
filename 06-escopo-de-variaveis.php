<?php

//ESCOPO GLOBAL
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 3;
$c = 7;

function exibiNome()
{
    global $nome;
    echo $nome;
}

exibiNome();
echo "<hr>";

///////////////////////////

function exibeCidade()
{
    //ESCOPO LOCAL
    global $cidade;
    $cidade = "Rio de janeiro";
}

exibeCidade();
echo $cidade;

echo "<hr>";

///////////////////////////

function Soma()
{
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

Soma();

?>