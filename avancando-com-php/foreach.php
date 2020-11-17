<?php

$contasCorrentes = [
    43587954234 => [
        'titular'=> 'Vinicius',
        'saldo'=>1000
    ],
    35487965424 =>  [
        'titular'=> 'Maria',
        'saldo'=>10000
    ],
    54879656532 =>[
        'titular'=> 'Alberto',
        'saldo'=>300
    ],
];

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}