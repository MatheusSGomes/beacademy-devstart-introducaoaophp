<?php

function soma($n1, $n2) {
  return $n1 + $n2;
}

echo soma(10, 60);

echo PHP_EOL."----------".PHP_EOL;

echo soma(20, 90);

echo PHP_EOL."----------".PHP_EOL;

// echo soma("Matheus", "Gomes");
// PHP Fatal error:  Uncaught TypeError: Unsupported operand types: string + string

function testeConcatenacao($frase1, $frase2) {
  return $frase1 . $frase2;
}

echo testeConcatenacao("Matheus ", "Gomes");
// Matheus Gomes

?>