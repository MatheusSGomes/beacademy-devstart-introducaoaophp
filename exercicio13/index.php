<!-- Exercício escrever de 1900 até 2022 usando a estrutura de repetição while (de 2022 para 1900) -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selecione o ano</title>
</head>
<body>
  <p>Selecione o ano: </p>
  <select>
    <option selected>-- Selecione o ano --</option>
    <?php
      $ano = 2022;

      while ($ano >= 1900) {
        echo "<option>{$ano}</option>";
        $ano--;
      }

    ?>
  </select>
</body>
</html>
