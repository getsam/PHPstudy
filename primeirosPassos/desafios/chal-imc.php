<?php

$peso = 60;
$altura = 1.74;
$alturaElevada = $altura ** 2;
$imc = $peso / $alturaElevada;

echo $imc . PHP_EOL;

switch($imc) {
    case $imc < 17:
        echo "muito abaixo do peso";
        break;
    case $imc > 17 && $imc <= 18.49:
        echo "Abaixo do peso";
        break;
    case $imc >= 18.5 && $imc <= 24.99:
        echo "Peso Normal";
        break;
    case $imc >= 25 && $imc <= 29.99:
        echo "Acima do peso";
        break;
    case $imc > 30 && $imc <= 34.99:
        echo "Obesidade I";
        break;
    case $imc >= 35 && $imc <= 39.99:
        echo "Obesidade II(severa)";
        break;
    case $imc >= 40:
        echo "Obesidade III(Morbida)";
}
