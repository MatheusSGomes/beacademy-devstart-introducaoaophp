<!-- Exercício - Adicionar o bootstrap a páginas carregadas com rotas -->


<?php
  
  include 'telas/head.php';
  include "telas/menu.php";
  
  $url = $_SERVER['REQUEST_URI'];

  if($url === '/') {

    include "telas/home.php";

  } elseif ($url === '/cadastro') {

    include "telas/cadastro.php";

  } elseif ($url === '/admin') {

    include "telas/admin.php";

  } elseif ($url === '/login') {

    include "telas/login.php";

  } else {
    
    include "telas/404.php";
    
  }

  include 'telas/footer.php';
?>
