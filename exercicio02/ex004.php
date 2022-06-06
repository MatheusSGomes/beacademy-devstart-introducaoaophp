<!-- CRIAR UMA CALCULADORA -->
<form action="" method="POST">
  <input type="number" name="numero1" placeholder="Numero 1" /> <br>
  <input type="number" name="numero2" placeholder="Numero 2" /> <br>

  <button name="soma">Somar</button>
  <button name="subtrair">Subtrair</button>
  <button name="multiplicar">Multiplicar</button>
  <button name="dividir">Dividir</button>
</form>

<?php
  if($_POST) {
    
    if(isset($_POST['soma'])) {
      echo "Resultado: ", $_POST['numero1'] + $_POST['numero2'];
    }

    if(isset($_POST['subtrair'])) {
      echo "Resultado: ", $_POST['numero1'] - $_POST['numero2'];
    }

    if(isset($_POST['multiplicar'])) {
      echo "Resultado: ", $_POST['numero1'] * $_POST['numero2'];
    }

    if(isset($_POST['dividir'])) {
      echo "Resultado: ", $_POST['numero1'] / $_POST['numero2'];
    }

    echo "<br><br>";

    var_dump($_POST);
  }
?>