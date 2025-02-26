<?php

$peso = readline("Peso: ");
$altura = readline("Altura: ");
$imc = $peso / $altura **2;

echo "Seu IMC é de $imc. Voce está com o IMC ";

if($imc < 18.5){
    echo "abaixo";
} elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado" . PHP_EOL;