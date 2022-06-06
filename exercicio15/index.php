<!-- 
  Criar um formulário com 3 selects (dia, mes, ano) de nascimento
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício data de nascimento</title>
</head>
<body>
  <h1>Data de nascimento:</h1>
  <form action="" method="POST">
    <label for="dia">Selecione o dia:</label>
    <select name="dia" id="dia">
      <option selected disabled>Selecione o dia</option>
      <?php
        $dia = 0;

        while ($dia <= 31) {
          echo "<option>{$dia}</option>";
          $dia++;
        }
      ?>
    </select>
    
    <br>

    <label for="mes">Selecione o mês:</label>
    <select name="mes" id="mes">
      <option selected disabled>Selecione o mês</option>
      <?php
        for ($mes = 0; $mes <= 12; $mes++) {
          echo "<option>{$mes}</option>";
        }
      ?>
    </select>

    <br>

    <label for="ano">Selecione o ano:</label>
    <select name="ano" id="ano">
      <option selected disabled>Selecione o ano</option>
      <?php
        $ano = 2022;
        
        while($ano >= 1900) {
          echo "<option>{$ano}</option>";
          $ano--;
        }
      ?>
    </select>

    <br>
    <br>

    <button>Cadastrar</button>

    <br>
    <br>
  </form>
  
  <table>
    <thead>
      <tr>
        <th>Dia</th>
        <th>Mês</th>
        <th>Ano</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          
          if (isset($_POST)) {
            $dia_nascimento = $_POST['dia'];
            $mes_nascimento = $_POST['mes'];
            $ano_nascimento = $_POST['ano'];
          }

          echo "<td>{$dia_nascimento}</td>
                <td>{$mes_nascimento}</td>
                <td>{$ano_nascimento}</td>";
        ?>
      </tr>
    </tbody>
  </table>
  

</body>
</html>