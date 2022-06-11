<?php

declare(strict_types=1);

function mostrarNomes(array $nomes): void
{
  foreach ($nomes as $cadaNome) {
    echo "Nome: " . $cadaNome.PHP_EOL;
  }
}

mostrarNomes(["Joaquim", "Luzia", "Filomena"]);
// Nome: Joaquim
// Nome: Luzia
// Nome: Filomena

function testaRetorno(string $nome): string {
  return $nome;
}

// echo testaRetorno("Oi");
// PHP Fatal error:  Uncaught TypeError: testaRetorno(): Return value must be of type string, int returned

echo PHP_EOL;

function soma(float $n1, float $n2): float 
{
  return $n1 + $n2;
}

// echo soma(55, 43); // 98