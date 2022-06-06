<?php
// Concatenação
$nome = "Matheus";
$sobrenome = "Gomes";
$idade = 27;
$cidade = "Brasília";

// echo "Meu nome é " . $nome . " tenho " . $idade . " anos, e moro em " . $cidade;

echo "<br>";

// echo "Meu nome é {$nome} tenho {$idade} anos e moro em {$cidade}";
// Meu nome é Matheus tenho 27 anos e moro em Brasília

echo 'Meu nome é {$nome} tenho {$idade} anos e moro em {$cidade}';
// Meu nome é {$nome} tenho {$idade} anos e moro em {$cidade}

// echo ($nome . " " . $sobrenome);

$nome2 = "Chiquim";
$nome2 .= "da Silva";

// echo $nome2; // Chiquimda Silva