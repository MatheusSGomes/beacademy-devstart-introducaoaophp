<form action="" method="POST">
  <input type="text" name="nome" placeholder="Digite seu nome: ">
  <button>Enviar</button>
</form>

<?php
  if($_POST) {
    var_dump($_POST);
    //  array(1) { ["nome"]=> string(7) "Matheus" } 
  }
?>