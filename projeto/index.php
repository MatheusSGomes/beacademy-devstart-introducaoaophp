<!-- Exercício - Adicionar o bootstrap a páginas carregadas com rotas -->
<?php
  
  include 'telas/head.php';
  include "telas/menu.php";
  include 'acoes.php';
  
  $url = $_SERVER['REQUEST_URI'];

  match($url) {
    "/" => home(),
    "/cadastro" => cadastro(),
    "/admin" => admin(),
    "/login" => login(),
    "/listar" => listar(),
    "/relatorio" => relatorio(),
    default => erro404()
  };

  include 'telas/footer.php';

?>
