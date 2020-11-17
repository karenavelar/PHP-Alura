<?php

require "calculadora.php";

$notas = [6, 5, 10, 5];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média é: $media";
} else {
    echo "Não foi possível calcular a média";
}