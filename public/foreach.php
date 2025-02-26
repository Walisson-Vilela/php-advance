<?php
$conta1 = [
    'titular' => 'Walisson',
    'saldo' => 1000,
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000,
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach ($contasCorrentes as $index => $conta) {
    echo $index ,': ' , $conta['titular'] ,' => ' , $conta['saldo']. PHP_EOL;
}