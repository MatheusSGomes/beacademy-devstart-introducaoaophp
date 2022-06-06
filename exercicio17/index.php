<?php

$aluno1 = "Chiquim";
$aluno2 = "Maria";
$aluno3 = "Zezim";

$alunos = [
  'Chiquim',
  'Maria',
  'Zezim'
];

echo $alunos[1]; // Maria

echo "<br>";

echo "<h2>Nome do aluno: {$alunos}</h2>";
// Nome do aluno: Array

echo "<h2>Nome do aluno: {$alunos[1]}</h2>";
// Nome do aluno: Maria

