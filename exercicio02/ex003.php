<form action="" method="POST">
  <input type="text" name="nome" placeholder="Nome: " /> <br />
  <input type="text" name="cidade" placeholder="Cidade: " /> <br />
  <button>Enviar</button>
</form>

<!-- CÓDIGO PHP PARA MOSTRAR QUANDO OS DADOS SÃO ENVIADOS -->
<?php
  if ($_POST) {
    echo "Oi ".$_POST['nome'];
  }
?>