<?php

//alterando os indices
$contasCorrentes = [
    12345678910 => ['titular' => 'Vinicius',
    'saldo' => 1000],
    12345677910 => ['titular' => 'Maria',
    'saldo' => 10000],
    12345789111 => ['titular' => 'Alberto',
    'saldo' => 300]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf ." ". $conta['titular'] . PHP_EOL;
}