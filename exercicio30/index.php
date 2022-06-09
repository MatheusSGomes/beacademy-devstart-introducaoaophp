<?php

include 'telas/menu.php';

$url = $_SERVER['REQUEST_URI'];

if($url === '/') {
  include 'telas/home.php';
} elseif ($url === '/login') {
  include 'telas/login.php';
} elseif ($url === '/cadastro') {
  include 'telas/cadastro.php';
} else {
  include 'telas/404.php';
}

// echo match($url) {
//   "/" => "<h1>Página inicial</h1>",
// };
