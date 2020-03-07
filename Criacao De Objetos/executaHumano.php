<?php
echo '<prev>';

require('Humano.php');

//Criando objetos
$pessoa = new Humano(12);
//$pessoa->ministrarCurso();
//$pessoa->dormir();
//echo $pessoa->nome;


//aqui criamos uma segunda pessoa e trocamos o nome dela
//ao mesmo tempo aprensentei o nome dessa segunda pessoa
//e da primeira
$pessoa2 = new Humano(12);
$pessoa2->nome = "Julio";
echo "<br>";
echo $pessoa2->nome;
echo "<br>";
echo $pessoa->nome;

$pessoa2 = new Humano(13);
$pessoa2->nome = "Julio";
echo "<br>";
//$pessoa3 = clone($pessoa2);
//$pessoa3->nome = 'Henrique';
var_dump($pessoa);//Henrique
unset($pessoa);
var_dump($pessoa2);//Julio

//echo $pessoa2->nome;
//echo $pessoa->nome;
//echo Humano::VIDA;

echo Humano::VIDA;

