<?php

/********** Escalares *************/
//string
$nome = "Olá Mundo! 123, testando!";
var_dump($nome);

if (is_string($nome)) :
    echo "<br>É uma string";
else :
    echo "<br>Não é uma string";
endif;

echo "<hr>";

//int
$idade = 27;
var_dump($idade);

if (is_int($idade)) :
    echo "<br>É um inteiro";
else :
    echo "<br>Não é um inteiro";
endif;

echo "<hr>";

//float
$altura = 1.77;
var_dump($altura);

if (is_float($altura)) :
    echo "<br>É um real";
else :
    echo "<br>Não é um real";
endif;

echo "<hr>";

//boolean
$admin = false;
var_dump($admin);

if (is_bool($admin)) :
    echo "<br>É um booleano";
else :
    echo "<br>Não é um booleano";
endif;

echo "<hr>";

/********** Compostos *************/
//array
$carros = array("Gol<br>", "Uno<br>", "Camaro<br>", 12, 20.6, true);
var_dump($carros);
echo "<hr>";
//object
class cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}

$cliente = new cliente();
$cliente->atribuirNome("Isabel");
var_dump($cliente);

if (is_object($cliente)) :
    echo "<br>É um objeto";
else :
    echo "<br>Não é um objeto";
endif;

/********** Especiais *************/
//NULL
echo "<hr>";
$cidade = NULL;
var_dump($cidade);

//Resource
