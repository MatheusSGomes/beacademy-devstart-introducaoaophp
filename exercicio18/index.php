<?php

$frutas = [
  'Laranja', 
  'Banana',
  'Abacaxi'
];

// Adicionar elemento no array
$frutas[] = 'Maçã';

// Adicionando elemento em uma posição
$frutas[10] = 'Melancia'; // posição 10

$frutas[] = 'Abacate';    // posição 11
$frutas[] = 'Manga';    // posição 12

echo "<pre>";
var_dump($frutas);
echo "</pre>";
// array(4) { [0]=> string(7) "Laranja" [1]=> string(6) "Banana" [2]=> string(7) "Abacaxi" [3]=> string(5) "Maça" } 

?>

<ul>
  <li><?php echo $frutas[0]?></li>
  <li><?php echo $frutas[1]?></li>
  <li><?php echo $frutas[2]?></li>
  <li><?php echo $frutas[3]?></li>
  <li><?php echo $frutas[10]?></li>
  <li><?php echo $frutas[11]?></li>
  <li><?php echo $frutas[12]?></li>
</ul>