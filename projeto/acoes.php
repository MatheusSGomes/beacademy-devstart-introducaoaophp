<?php

function login() {
  include 'telas/login.php';
}

function cadastro() {
  if($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
  
    $arquivo = fopen('dados/contatos.csv', 'a+');
  
    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
  
    fclose($arquivo);

    echo '<div class="alert alert-success">Cadastro realizado</div>';
  }

  include 'telas/cadastro.php';
}

function home() {
  include 'telas/home.php';
}

function listar() {
  $contatos = file('dados/contatos.csv');

  include 'telas/listar.php';
}

function admin() {
  include 'telas/admin.php';
}

function relatorio() {
  include 'telas/relatorio.php';
}

function erro404() {
  include 'telas/home.php';
}