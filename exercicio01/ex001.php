<html>
  <head>
    <title>Formulário de Exemplo</title>
  </head>
  <body>
    <h1>Formulário Comum</h1>
    <form action="" method="POST">
      Nome: <input type="text" name="nome">
      Cidade: <input type="text" name="cidade">
      <br>
      <button>Enviar</button>
    </form>

    <?php
      if($_POST) {
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];

        echo "Oi, {$nome}, você mora em {$cidade}.";
      }
    ?>
  </body>
</html>