<?php 

// Cada novo termo na sequência de Fibonacci é gerado pela adição dos dois termos anteriores. Começando com 1 e 2, o primeiro 10 os termos serão:
// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89....

//Considerando os termos na sequência de Fibonacci cujos valores não excedem quatro milhões, encontre a soma dos termos de valor par.

//1- Entender como funciona a sequencia de fibonacci e logo apos conseguir obter
//o resultado apresentado no enunciado

$a = [];
$b = 0;
$c =1;
$soma = 0;

for($i=0; $i < 39; $i++) { 
    $d = $b + $c; 
    $b = $c; 
    $c = $d; 
    if($b % 2 == 0 && $b <= 4000000) {
        $soma += $b; 
        $a [] = $soma;
    }
}

print implode(", ", $a);

//Funcionamento por trás da sequencia de fibonacci
//.
//.
// B começa como 0 (Primeiro numero da sequencia)
// e C começa como 1 (Segundo numero da sequencia)
//onde vai começar a sequencia em base deles
//fucando 0, 1...
//b = 0 e c = 1, d = 1, b= c logo b = 1, c = d logo c = 1 
// b = 1 c = 1 , d = 2, b = c logo b = 1, c = d logo c = 2
// b = 1 c = 2 , d = 3, b = c logo b = 2, c = d logo c = 3
// b = 2 c = 3 , d = 5, b = c logo b = 3, c = d logo c = 5
// b = 3 c = 5 , d = 8, b = c logo b 5, c = d logo c = 8
// b = 5 c = 8 , d = 13, b = c logo b = 8, c = d logo c = 13
// b = 8 c = 13, d = 21, b = c logo b = 13, c = d logo c = 21
// b = 13 c = 21, d = 34, b = c logo b = 21, c = d logo c = 34