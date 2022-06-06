<!-- 
  Criar uma tabela de produtos onde temos o nome, preço, descrição e foto do produto. Criar 5 produtos na tabela.
  Criar as estruturas como array.
 -->

<?php
  $produto1 = [
    'foto' => 'relogio1.jpg',
    'nome' => 'Relógio 1',
    'descricao' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, repudiandae.',
    'preco' => 'R$ 195,00'
  ];

  $produto2 = [
    'foto' => 'relogio2.jpg',
    'nome' => 'Relógio 2',
    'descricao' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, repudiandae.',
    'preco' => 'R$ 359,00'
  ];

  $produto3 = [
    'foto' => 'relogio3.jpg',
    'nome' => 'Relógio 3',
    'descricao' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, repudiandae.',
    'preco' => 'R$ 276,00'
  ];

  $produto4 = [
    'foto' => 'relogio4.jpg',
    'nome' => 'Relógio 4',
    'descricao' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, repudiandae.',
    'preco' => 'R$ 341,00'
  ];

  $produto5 = [
    'foto' => 'relogio5.jpg',
    'nome' => 'Relógio 5',
    'descricao' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, repudiandae.',
    'preco' => 'R$ 549,00'
  ];

  $produtos = [
    $produto1,
    $produto2,
    $produto3,
    $produto4,
    $produto5,
  ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      background-color: #212529;
    }

    .foto-produto {
      max-width: 200px;
    }

    td {
      vertical-align: middle;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="h1 text-white mt-5 mb-5">Loja de Relógios</h1>

    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>Foto</th>
          <th>Produto</th>
          <th>Descrição</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($produtos as $produto) {
            echo "<tr>";
              echo "<td><img class='foto-produto' src='./images/{$produto['foto']}'></td>";
              echo "<td>{$produto['nome']}</td>";
              echo "<td>{$produto['descricao']}</td>";
              echo "<td>{$produto['preco']}</td>";  
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>