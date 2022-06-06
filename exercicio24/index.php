<?php

$dados = [
  'nome' => 'Chiquim',
  'sobrenome' => 'Silva',
  'idade' => 34,
  'ano_formacao' => 2001,
  'cor_preferida' => 'Azul',
  'notas' => [
    9.5,
    8.9,
    7.5,
    6.9
  ]
];

echo $dados['nome'] . "<br>";      // Chiquim
echo $dados['sobrenome'] . "<br>"; // Silva
echo $dados['idade'] . "<br>";     // 34
echo $dados['notas'][0] . "<br>";  // 9.5
echo $dados['notas'][1] . "<br>";  // 8.9