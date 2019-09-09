<?php

$idade = 16;
$numeroDePessoas = 2;


echo "Voce só pode entrar se tiver apartir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

# && == and = duas opções validas
# || == or = duas opções validas
if ($idade >= 18 ){
    echo "Voce tem $idade anos" . PHP_EOL . 'Pode entrar sozinho';
} else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Voce tem $idade e esta acompanhado pode entrar !";
} else {
    echo "voce tem $idade , voce não pode entrar";
}


echo PHP_EOL;
echo "Adeus";