<!-- 
Exercício: Criar uma tabela HTML e preencher essa tabela com dados que vem do PHP.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício Criar Tabela</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px;
      text-align: center;
    }
  </style>

</head>

<body>
  <h1>Cadastre a nota do aluno</h1>
  <form action="" method="POST">
    <input type="text" name="nome" placeholder="Nome" /> <br>
    <input type="text" name="nota1" placeholder="Nota 1" /> <br>
    <input type="text" name="nota2" placeholder="Nota 2" /> <br>

    <button>Calcular média</button>
  </form>

  <br>

  <table>
    <caption>Calcular Média do Aluno</caption>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Média</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(isset($_POST)) {
          $nome = $_POST['nome'];
          $nota1 = $_POST['nota1'];
          $nota2 = $_POST['nota2'];
        };

        $media = ($nota1 + $nota2) / 2;

        echo "<tr>
          <td>{$nome}</td>
          <td>{$nota1}</td>
          <td>{$nota2}</td>
          <td>{$media}</td>
        </tr>"
      ?>
    </tbody>
  </table>
</body>
</html>