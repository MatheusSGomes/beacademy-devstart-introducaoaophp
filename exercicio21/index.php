<!-- Criar uma tabela usando o forEach com 2 informações (banda e número de músicas) -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Músicas mais ouvidas 2021</title>
</head>
<body>
  <h1>Músicas mais ouvidas no Spotify 2021</h1>

  <?php
    $musicas = ['Thinking Out Loud', 'Señorita', 'Someone You Loved'];
    $autores = ['Ed Sheeran', 'Shawn Mendes e Camila Cabello', 'Lewis Capaldi'];
    $streams = ['1,7 bilhão', '1,80 bilhão', '1,87 bilhão'];

    for($n = 0; $n < count($musicas); $n++) {
      $contador = $n + 1;

      echo "
            <h2>Música {$contador}:</h2>

            <ul>
              <li>{$musicas[$n]}</li>
              <li>{$autores[$n]}</li>
              <li>{$streams[$n]}</li>
            </ul>";
    };
  ?>
  
</body>
</html>