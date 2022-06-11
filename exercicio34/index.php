
<?php
// Transformar palavras abaixo em camel case usando uma função nativa do PHP

$nome = "matheus";
$sobrenome = "GOMES";

$nome2 = "chiquim da silva";

echo ucfirst($nome).PHP_EOL;
echo ucfirst(strtolower($sobrenome)).PHP_EOL;

echo PHP_EOL;

echo ucwords($nome2).PHP_EOL;
