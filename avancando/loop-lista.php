<?php

//$idadeList = array(21, 23, 19, 25, 30, 41, 18);

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$tamanhoLista = count($idadeList);

for ($i = 0; $i < $tamanhoLista; $i++){
    echo $idadeList[$i] . PHP_EOL;
}