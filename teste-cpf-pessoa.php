<?php

use Alura\Banco\Modelo\{CPF, Pessoa, Funcionario\Desenvolvedor};

require_once 'autoload.php';

try {
    $cpf = new CPF("");
} catch (InvalidArgumentException $ex) {
    echo $ex->getMessage() . PHP_EOL;
}

$cpf = new CPF("123.456.789-01");

try {
    $pessoa = new Desenvolvedor("123", $cpf, 10000);
} catch (DomainException $ex) {
    echo $ex->getMessage() . PHP_EOL;
}
