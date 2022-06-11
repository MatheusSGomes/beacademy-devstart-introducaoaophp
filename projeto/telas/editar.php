<h1>Editar Contato</h1>

<form action="" method="post">
  <input value="<?php echo $dados[0]; ?>" class="form-control mt-3 mb-3" type="text" name="nome" placeholder="Nome">

  <input value="<?php echo $dados[1]; ?>" class="form-control mb-3" type="text" name="email" placeholder="Email">
  
  <input value="<?php echo $dados[2]; ?>" class="form-control mb-3" type="text" name="telefone" placeholder="Telefone">
  <button class="btn btn-secondary">Enviar</button>
</form>