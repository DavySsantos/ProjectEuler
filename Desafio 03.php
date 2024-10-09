<?php 

//Como eu posso resolver esse desafio de forma simples usando php 
// Os principais fatores de 13195 são  5, 7, 13 e 29

//Qual é o maior fator primo do número 600851475143 ?

    $i = 600851475143;
    $divisor = 2;

    while ($i > 1){
        if ($i % $divisor === 0){
            $i /= $divisor;
        } else {
            $divisor++;
        }
    }
    print "O maior número primo é: $divisor";
    
//Explicação por trás da resolução 
//
//  A variavel $i é responsavel por apresetar o valor base no qual nosso codigo vai rodar,
//e a variavel $divisor é referente a nossa validação, iniciando com o valor 2, como primeiro numero primo, 
//assim a cada vez que o sistema de loop (o while) for validado ou ele vai divir o valor e obter um numero primo ou 
//vai adicionar mais um numero a nossa variavel $divisor, 
//repetindo o ciclo até se chegar no limite do valor base apresentado pela variavel $i.
