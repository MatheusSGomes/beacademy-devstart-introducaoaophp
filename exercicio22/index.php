<!-- 
  Exercício Criar uma tabela usando o forEach com 2 informações (banda e número de músicas) -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Músicas mais ouvidas 2021</title>
</head>
<body>
  <h1>10 músicas mais ouvidas na história do Spotify</h1>

  <?php
    $musicas = [
      ['Thinking Out Loud', 'Ed Sheeran', '1,7 bilhão'], 
      ['Señorita', 'Shawn Mendes e Camila Cabello', '1,80 bilhão'], 
      ['Someone You Loved', 'Lewis Capaldi', '1,87 bilhão'],
      ['Sunflower', 'Post Malone e Swae Lee', '1,88 bilhão'],
      ['Closer', 'The Chainsmokers feat. Halsey', '1,9 bilhão'],
      ['One Dance', 'Drake feat. Wizkid & Kyla', '2 bilhões'],
      ['Rockstar', 'Post Malone feat. 21 Savage', '2,16 bilhões'],
      ['Blinding Lights', 'The Weeknd', '2,177 bilhões'],
      ['Dance Monkey', 'Tones and I', '2,179 bilhões'],
      ['Shape Of You', 'Ed Sheeran', '2,7 bilhões']
    ];

    $contador = 10;

    for($n = 0; $n < count($musicas); $n++) {
      echo "<h3>Música {$contador}:</h3>";
      echo "<ul>";

        for($i = 0; $i < count($musicas[0]); $i++) {
          echo "<li>{$musicas[$n][$i]}</li>";
        }
      
      echo "</ul>";

      $contador--;
    }

    // 

    // foreach($musicas as $musica) {
    //   echo "
    //     <ul>
    //       <li>{$musicas[$contador][$contador]}</li>
    //     </ul>
    //   ";

    //   $contador++;
    // }



    // for($n = 0; $n < count($musicas); $n++) {
    //   echo "
    //         <h2>Música {$contador}:</h2>
    //         <ul>
    //           <li>{$musicas[$n]}</li>
    //           <li>{$autores[$n]}</li>
    //           <li>{$streams[$n]}</li>
    //         </ul>";
    // };
  ?>
  
</body>
</html>