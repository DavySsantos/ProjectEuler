<?php 
// Se listarmos todos os números naturais abaixo de 10 
// que são múltiplos de 3 ou 5 ,
// nós temos 3, 5, 6
// e 9. A soma desses múltiplos é 23.
// Encontre a soma de todos os múltiplos de 3
// ou 5 abaixo de 1000.

// 1- começar separando todos o numeros que forem divisiveis de 3 ou 5,
// de forma que não haja outros valores
// 2- apos a separar todoso os valores até o limite dado de 1000, realizar a soma
// dos mesmo para obter o resultado.

$n2 = 0;
$n1 = [];

for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
        $n1[] = $i ;
        $n2 += $i;
    }
}

print "A ordem de numeros é de " . implode(", ", $n1) ." \n";
print "A soma dos divisores de 3 e 5 é : $n2";

