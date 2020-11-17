<?php

$saldos = [
    4500,
    3000,
    2000,
    5871,
    9874,
    1056,
];

foreach ($saldos as $saldo) {
    echo "<p> saldo é $saldo</p>";
}

sort($saldos);

echo "O menor saldo é $saldos[0]";