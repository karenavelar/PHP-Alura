<?php

$nomes = "Danilo, Guilherme, Gustavo, Karen, Marcella, Paulo";

$arrays_nomes = explode(", ", $nomes);

foreach ($arrays_nomes as $nome) {
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(", ", $arrays_nomes);

echo $nomesJuntos;