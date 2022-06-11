<?php

declare(strict_types=1);

function soma(float $n1, float $n2) {
  return $n1 + $n2;
}

echo soma(5.67, 20);

echo PHP_EOL;

function welcome(string $nome, string $sobrenome) {
  return $nome . " " . $sobrenome;
}

echo welcome("Matheus", "Gomes");

?>