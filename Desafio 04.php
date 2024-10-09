<?php 
//  Um número palíndromo é lido da mesma forma em ambas as direções. 
//O maior palíndromo feito do produto de dois 2 números.

//  Encontre o maior palíndromo feito a partir do produto de dois
//números de 3-dígitos.

$h = 0;

for ($i = 100; $i <= 999; $i++) {
    for ($j = 100; $j <= 999; $j++) {
        $k = $i * $j;

        $str1 = (string)$k;
        $str2 = strrev($str1);

        if ($str1 === $str2 && $k > $h){
            $h = $k;
        }
    }
}
    print "O maior Palíndromo de a partir de dois numeros de 3 digitos é: $h";

//Explicando o codigo

//Variaveis:
//$h = responsavel por armazenar os palíndromos encontrados (sempre sera atuaizado;
//com o maior que for encontrado ao decorrer do codigo);
//$i = variavel de armazenamento do looping;
//$j = variavel de armazenamento do looping 2;
//$k = variavel de resultado entre a multiplicação entre $i e $j;
//$str1 = transforma o resultado ($k) em uma string;
//$str2 = reverte a string para uma futura comparação.

//Codigo:
//  É necessario dois loopings (dois FOR presentes no codigo) para que,
//seja possivel fazer uma multiplicação necessaria na formação de numeros
//palíndromos, sendo feito todo o processo, partimos para a parte de validação
//onde entra o IF que diz, se $str1(primeira string) e $str2(string revertida)
//forem restritamente identicas e o valor de $k(valor do possivel palíndromo)
//for maior que $h(valores antigos armazenados), com ambas as condições sendo
//verdadeiras o valor de $h será atualizada trazendo um novo maior valor
//do palíndromo até chegar no maior.

