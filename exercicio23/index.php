<?php

$a1 = [
  'nome' => 'Chiquim',
  'sobrenome' => 'Silva',
  'telefone' => '85 9 8889-0000',
  'notas' => [
    9.5,
    8.9,
    7.5
  ]
];

$a2 = [
  'nome' => 'Maria',
  'sobrenome' => 'Fernandes',
  'telefone' => '85 9 7766-0000',
  'notas' => [
    8.4,
    6.8,
    5.6
  ]
];

$alunos = [
  $a1,
  $a2
];

echo "<pre>";
  var_dump($alunos);
echo "</pre>";