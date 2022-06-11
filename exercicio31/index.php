<?php

function pagarConta($fatura, $dinheiro) {

}

function soma($n1, $n2) {
  echo $n1 + $n2;
}

soma(10, 50);

function welcome($nome) {
  echo "Bem vindo {$nome}".PHP_EOL;
}

welcome("Matheus");
welcome("Maria");
welcome("Alessandro");

$x = 12;

function exibeX($x) {
  echo $x;
}

exibeX($x);
// 12