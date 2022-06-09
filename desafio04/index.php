<!-- Exercício usar o direcionamento de páginas com a estrutura match do PHP8 -->

<?php

$url = $_SERVER['REQUEST_URI'];

echo match($url) {
  "/" => "<h1>Página inicial</h1>",
  "/cadastro" => "<h1>Página de cadastro</h1>",
  "/login" => "<h1>Página de login</h1>",
  default => "<h1>Página não encontrada</h1>"
};

