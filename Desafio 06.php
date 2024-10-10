<?php 

//  A soma dos quadrados dos dez primeiros números naturais é, 
                        // 1^2, 2^2, 3^2... 10^2 = 385.
//  O quadrado da soma dos dez primeiros números naturais é,
                        // (1+2+3.... +10)^2 = 3025
//  Portanto, a diferença entre a soma dos quadrados dos dez primeiros números 
//naturais e o quadrado da soma é 3025 - 385 = 2640

//  Encontre a diferença entre a soma dos quadrados dos primeiros cem números naturais e o quadrado da soma.


    $rep = 100;
    $c = 0;
    $j= 0;

    for ($a = 1; $a <= $rep; $a++) {
        $c += pow($a,2);
    }

    for ($i = 1; $i <= $rep; $i++) {
        $j += $i;
        $r = pow($j, 2) - $c;
    }
    print "$r\n";

//Explicando o codigo:

//  O codigo é bem simples, trata-se de dois loopings, onde o primeiro 
//e responsavel por fazer a soma dos quadrados da sequencia desejada.
//  O segundo looping é responsavel pelo quadrado da soma da sequencia,
//ao final é efetuado a subitração dos resultados representado pela varial $r.