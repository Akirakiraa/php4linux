<?php
echo '<prev>';

class Humano
{

    //atributo
    public $nome = 'Akira';

    //constante de classe
    const VIDA = true;

    //Metodos do objeto
    public function ministrarCurso()
    {
        echo "Dando Suporte";
        echo "<br>";
    }

    public function dormir()
    {
        if(self::VIDA == true)
        {
        echo "dormindo";
        echo "<br>";}
        else{
        echo "morto";
        echo "<br>";
        }

    }

    public function __clone()
    {
        echo "Clonando o objeto";
    }

    public function __construct($idade)
    {
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo "Estou desalocando o espaco da memoria";
    }
}

$pessoa = new Humano(12);
$pessoa->ministrarCurso();
$pessoa->dormir();
echo $pessoa->nome;


//aqui criamos uma segunda pessoa e trocamos o nome dela
//ao mesmo tempo aprensentei o nome dessa segunda pessoa
//e da primeira

$pessoa2 = new Humano(13);
$pessoa2->nome = "Julio";
echo "<br>";
//$pessoa3 = clone($pessoa2);
//$pessoa3->nome = 'Henrique';
var_dump($pessoa);//Henrique
var_dump($pessoa2);//Julio
//echo $pessoa2->nome;
//echo $pessoa->nome;
//echo Humano::VIDA;

//colocar na primeira linha