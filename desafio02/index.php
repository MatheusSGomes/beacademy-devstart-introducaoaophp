<!-- 
  Criar tabela de alunos (nome, email, telefone e notas)
 -->

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

  $alunos = [
    $a1,
    $a2
  ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de alunos</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: .5rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Nota1</th>
        <th>Nota2</th>
        <th>Média</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($alunos as $aluno) {
          echo "<tr>"; 
            echo "<td>{$aluno['nome']}</td>";
            echo "<td>{$aluno['email']}</td>";
            echo "<td>{$aluno['telefone']}</td>";

            $media_notas = 0;

            foreach($aluno['notas'] as $nota) {
              echo "<td>{$nota}</td>";
              $media_notas += $nota;
            }

            $media_notas /= count($aluno['notas']);

            echo "<td>{$media_notas}</td>";
          echo "</tr>";

        }
      ?>
    </tbody>
  </table>
</body>
</html>

<!-- 

  echo $alunos[0]['nome'];
  echo $alunos[0]['email'];
  echo $alunos[0]['telefone'];
  echo $alunos[0]['notas'][0];
  echo $alunos[0]['notas'][1];

 -->
