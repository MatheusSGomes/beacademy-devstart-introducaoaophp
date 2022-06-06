<!-- RESOLUÇÃO -->
<?php

$bandas = [
  'Banda 1',
  'Banda 2',
  'Banda 3',
  'Banda 4'
];

$bandas[100] = 'Nirvana';

// ESTRUTURA COM FOR EACH
echo '<ul>';
  foreach ($bandas as $banda) {
    echo "<li>{$banda}</li>";
  }
echo '</ul>';

// Banda 1
// Banda 2
// Banda 3
// Banda 4
// Nirvana

echo "<br>";
echo "<br>";

// ESTRUTURA COM FOR
echo '<ul>';
  for($n = 0; $n <= 3; $n++) {
    echo "<li>{$bandas[$n]}</li>";
  }
echo '</ul>';