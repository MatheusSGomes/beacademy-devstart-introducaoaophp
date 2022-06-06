<?php
  $frutas = [
    'Maçã',
    'Laranja',
    'Abacaxi',
    'Mamão',
    'Melão'
  ];
?>

<h3>Estrutura com while:</h3>

<ul>
  <?php
    $n = 0;

    while($n < 5) {
      echo "<li>{$frutas[$n]}</li>";
      $n++;
    };
  ?>
</ul>

<br>
<h3>Estrutura com For</h3>

<ul>
  <?php
    for($n = 0; $n < 5; $n++) {
      echo "<li>{$frutas[$n]}</li>";
    }
  ?>
</ul>

<br>
<h3>Estrutura com Do While:</h3>

<ul>
  <?php
    $n = 0;

    do {
      echo "<li>{$frutas[$n]}</li>";
      $n++;
    } while ($n < 5);
  ?>
</ul>