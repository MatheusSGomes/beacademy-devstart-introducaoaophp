<?php

$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2I).PHP_EOL;
// $argon2i$v=19$m=65536,t=4,p=1$cU9SdUQxVllrMURUZzFQYw$facx28B8gciRBsDpbra3jFwGe9W2Q1MPLaH6BXrpO5w

?>