<style>
  th, td {
    vertical-align: middle;
  }
</style>

<h1>Listar Contatos</h1>

<table class="table table-striped table-borderless">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Joaquim</td>
      <td>joaquim@email.com</td>
      <td>61 9876-4561</td>
    </tr>
    <?php

    foreach($contatos as $cadaContato) {
      $partes = explode(";", $cadaContato);

      echo "<tr>";
        echo "<td>{$partes[0]}</td>";
        echo "<td>{$partes[1]}</td>";
        echo "<td>{$partes[2]}</td>";
      echo "</tr>";
    }

    ?>
  </tbody>
</table>

