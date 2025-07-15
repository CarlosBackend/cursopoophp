<?php
require_once "./vendor/autoload.php"; // Autoload do Composer para carregar as classes automaticamente
require_once "./src/PessoaFisica.php";
use Henri\CursoPooPhp\PessoFisica;

$pessoa = new PessoFisica();

$pessoa->setNome("João da Silva");
$pessoa->setCpf("123.456.789-00");
$pessoa->setPhone("1234-5678");
$pessoa->setAge(30);

dump($pessoa); // var_dump para verifica a estrutura do objeto criado