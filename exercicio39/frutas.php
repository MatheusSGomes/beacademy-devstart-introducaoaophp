<?php

$frutas = [
  'Banana', 
  'Tangerina',
  'Abacate',
  'Jaca'
];

unset($frutas[1]);

foreach($frutas as $posicao => $cadaFruta) {
  echo "Posição: $posicao Fruta: $cadaFruta".PHP_EOL;
}

?>