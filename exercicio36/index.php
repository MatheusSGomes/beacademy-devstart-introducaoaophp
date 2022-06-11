<?php

  $teste = "Banana-Tangerina-Laranja-Abacate";
  $partes = explode("-", $teste);

  echo var_dump($partes);

  // array(4) {
  //   [0]=>
  //   string(6) "Banana"
  //   [1]=>
  //   string(9) "Tangerina"
  //   [2]=>
  //   string(7) "Laranja"
  //   [3]=>
  //   string(7) "Abacate"
  // }

?>