<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, "Matheus".PHP_EOL);
fwrite($arquivo, "Alessandro".PHP_EOL);
fwrite($arquivo, "Luiza".PHP_EOL);

fclose($arquivo);


?>