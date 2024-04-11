<?php

/*
Este é um pequeno exemplo de como a OOP permite tornar o nosso código
mais bem organizado, mais profissional, mais estruturado.

1. Criar uma classe (class_numero)
2. A classe deverá ter uma propriedade privada número
3. O construtor da classe serve para definir o número
4. O método get_numero() serve para devolver o número
5. O método par_ou_impar() deverá devolver 'par' ou 'impar'após analisar o número
6. O método tabuada() deverá devolver um array com a tabuada do número até 10.
    Exmplo: 3 x 1 = 3
            3 x 2 = 6
            3 x 3 = 9
            ...
7. O método raiz_quadrada() deverá devolver a raz quadrada do número
8. Neste script deveremos importar a classe, criar 4 objetos a partir dela
com os valores 5, 7, 16 e 123.
Para cada uma dessas instâncias, deveremos apresentar:
    a) O número através de get_numero()
    b) Se é par ou impar
    c) A raiz quadrada do número
    d) A tabuada
*/

require_once ('ClassNumero.php');

$obj1 = new Numero(5);
$obj2 = new Numero(7);
$obj3 = new Numero(16);
$obj4 = new Numero(123);

echo $obj1->get_numero() . '<br>';
echo $obj1->par_ou_impar() . '<br>';
echo $obj1->raiz_quadrada() . '<br>';
foreach($obj1->tabuada() as $value) {
    echo $value . '<br>';
}

echo '<hr>';

echo $obj2->get_numero() . '<br>';
echo $obj2->par_ou_impar() . '<br>';
echo $obj2->raiz_quadrada() . '<br>';
foreach($obj2->tabuada() as $value) {
    echo $value . '<br>';
}

echo '<hr>';

echo $obj3->get_numero() . '<br>';
echo $obj3->par_ou_impar() . '<br>';
echo $obj3->raiz_quadrada() . '<br>';
foreach($obj3->tabuada() as $value) {
    echo $value . '<br>';
}

echo '<hr>';

echo $obj4->get_numero() . '<br>';
echo $obj4->par_ou_impar() . '<br>';
echo $obj4->raiz_quadrada() . '<br>';
foreach($obj4->tabuada() as $value) {
    echo $value . '<br>';
}

