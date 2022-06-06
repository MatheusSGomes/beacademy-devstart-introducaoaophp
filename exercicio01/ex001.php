<html>
  <head>
    <title>Formulário de Exemplo</title>
  </head>
  <body>
    <h1>Formulário Comum</h1>
    <form action="form.phtml" method="POST">
      Nome: <input type="text" name="nome">
      Cidade: <input type="text" name="cidade">
      <br>
      <button>Enviar</button>
    </form>

    <?php
      if($_POST) {
        echo "Oi, {$nome}, você mora em {$cidade}.";
      }
    ?>
  </body>
</html>