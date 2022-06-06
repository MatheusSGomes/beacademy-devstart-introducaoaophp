<?php
// OPERADOR TERNÁRIO

$idade = 18;

echo $idade >= 18 ? "de maior" : "de menor";
// de menor

echo "<br>";

$nome = "Matheus";

echo $nome ?? 'nome não definido';
// Matheus

echo "<br>";

print $nome ?: 'não há valor';  // Matheus

echo "<br>";
print $sobrenome ?: 'não há valor';  // não há valor