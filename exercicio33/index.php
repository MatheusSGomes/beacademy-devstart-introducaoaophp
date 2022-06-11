<?php

$notasCursoA = [
  10,
  9.5,
  5.5,
  6.1
];

$notasCursoB = [
  8.3,
  5.6,
  4.7,
  6.8
];

function mediaDeNotas(array $notas): float 
{
  // $total = array_sum($notas);
  // $quantidade = count($notas);

  // foreach($notas as $cadaNota) {
  //   $total += $cadaNota;
  //   $quantidade++;
  // }

  // return $total / $quantidade;

  return array_sum($notas) / count($notas);
}

echo mediaDeNotas($notasCursoA).PHP_EOL; // 7.775
echo mediaDeNotas($notasCursoB).PHP_EOL; // 7.775