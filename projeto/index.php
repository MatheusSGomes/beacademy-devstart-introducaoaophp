<!-- Exercício - Adicionar o bootstrap a páginas carregadas com rotas -->
<?php
  
include 'telas/head.php';
include "telas/menu.php";
include 'acoes.php';

$url = explode('?', $_SERVER['REQUEST_URI']);

match($url[0]) {
  '/' => home(),
  '/cadastro' => cadastro(),
  '/admin' => admin(),
  '/login' => login(),
  '/listar' => listar(),
  '/relatorio' => relatorio(),
  '/excluir' => excluir(),
  '/editar' => editar(),
  default => erro404()
};

include 'telas/footer.php';

?>
