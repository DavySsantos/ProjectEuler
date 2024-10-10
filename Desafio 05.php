<?php 

//  2520 é o menor número que pode ser dividido por cada um dos números de 1 para 10
//sem qualquer resto. Qual é o menor número positivo que é uniformemente divisívelpor todos os números de 1 para 20?

// Trata-se de um sistema onde envolve o mmc de valores, para se obter um resultado
//uniforme para ambos os fatores aplicados 


$resultado = 1;
$limite = 20;


for ($i = 1; $i <= $limite; $i++) {
    $a = $resultado;
    $b = $i;

    while ($b != 0) {
        $c = $b;
        $b = $a % $b;
        $a = $c;
    }
    
    $resultado = ($resultado * $i) / $a;
}

print "O resultado encontrado foi: $resultado\n";

//Explicação do codigo

//  A resolução conta com dois loopings, onde, o primeiro é onde iremos 
//usar os resultados para calcular o MMC (Minimo Multiplo Comum) dos numeros 
//de 1 até o valor proposto pelo desafio, nesse caso é o numero 20

//  O segundo looping trata-se de um while que esta sendo usado para calcular o
//MDC(Maximo Divisor Comum) utilizando a logica de Euclides.
// e finalizando com a utilização do valor do MDC para calcular o mmc.



