<!-- RESOLUÇÃO -->
<?php
  $a1 = [
    'nome' => 'Chiquim',
    'email' => 'chiquim@email.com',
    'telefone' => '85 9 8889-0000',
    'notas' => [
      9.5,
      8.9
    ]
  ];

  $a2 = [
    'nome' => 'Maria',
    'email' => 'maria@email.com',
    'telefone' => '85 9 7766-0000',
    'notas' => [
      8.4,
      6.8
    ]
  ];

  $a3 = [
    'nome' => 'Zezim',
    'email' => 'zesim@email.com',
    'telefone' => '85 9 7613-0000',
    'notas' => [
      8.4,
      6.8
    ]
  ];

  $a4 = [
    'nome' => 'Luiza',
    'email' => 'luiza@email.com',
    'telefone' => '85 9 8753-0000',
    'notas' => [
      8.4,
      6.8
    ]
  ];

  $alunos = [
    $a1,
    $a2,
    $a3,
    $a4
  ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de alunos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  
  <div class="container">
    <h1 class="mt-5">Alunos</h1>
    
    <hr>

    <table class="table table-hover table-striped mt-5">
      <thead class="table-dark">
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($alunos as $cadaAluno) {
            echo "<tr>";
              echo "<td>" . $cadaAluno['nome'] . "</td>";
              echo "<td>" . $cadaAluno['email'] . "</td>";
              echo "<td>" . $cadaAluno['telefone'] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>