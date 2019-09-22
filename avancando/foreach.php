<?php

//alterando os indices
$contasCorrentes = [
    '123.456.789-10' => ['titular' => 'Vinicius',
    'saldo' => 1000],
    '123.456.779-10' => ['titular' => 'Maria',
    'saldo' => 10000],
    '123.457.891-11' => ['titular' => 'Alberto',
    'saldo' => 300]
];

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf ." ". $conta['titular'] . PHP_EOL;
}